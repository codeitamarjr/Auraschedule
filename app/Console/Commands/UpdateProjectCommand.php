<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ProjectUpdateNotification;

class UpdateProjectCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update project by pulling latest changes, running migrations, updating dependencies, and building assets';

    /**
     * Execute the console command.
     *
     * This command will update the project by pulling latest changes, running migrations, updating dependencies, and building assets.
     * It will log the output of each step and send a notification with the result.
     * If any step fails, it will log the error and send a notification with the error message.
     *
     * @return void
     */
    public function handle()
    {
        $output = [];
        try {
            // Execute all steps and capture output
            $output[] = $this->formatOutput('git reset --hard', $this->executeShellCommand('git reset --hard'));
            $output[] = $this->formatOutput('git pull', $this->executeShellCommand('git pull'));
            $output[] = $this->formatOutput('php artisan migrate --force', $this->executeShellCommand('php artisan migrate --force'));
            $output[] = $this->formatOutput('composer install', $this->executeShellCommand('composer install --no-interaction --optimize-autoloader'));
            $output[] = $this->formatOutput('npm build', $this->executeShellCommand('npm install && npx vite build'));

            $outputMessage = implode(PHP_EOL, $output);

            // Log success
            Log::info('Project updated successfully.');

            // Send notification
            Notification::route('mail', 'hello@itjunior.dev')
                ->notify(new ProjectUpdateNotification("Project updated successfully:\n" . $outputMessage));

            $this->info('Project updated successfully.');
        } catch (\Exception $e) {
            // Log error
            Log::error('Project update failed: ' . $e->getMessage());

            // Send notification
            Notification::route('mail', 'hello@itjunior.dev')
                ->notify(new ProjectUpdateNotification('Project update failed: ' . $e->getMessage()));

            $this->error('Project update failed: ' . $e->getMessage());
        }
    }


    /**
     * Executes a shell command and returns its standard output.
     *
     * This method runs a shell command using Symfony's Process component with a timeout of 300 seconds.
     * If the command fails, it throws a RuntimeException with the error output.
     *
     * @param string $command The shell command to execute.
     * @return string The standard output of the executed command.
     * @throws \RuntimeException if the command execution fails.
     */
    private function executeShellCommand($command)
    {
        $process = \Symfony\Component\Process\Process::fromShellCommandline($command);
        $process->setTimeout(300);
        $process->run();

        if (!$process->isSuccessful()) {
            $errorOutput = $process->getErrorOutput();
            throw new \RuntimeException($errorOutput ?: 'Command failed with unknown error.');
        }

        // Return standard output
        return $process->getOutput();
    }

    /**
     * Formats the output of a command by adding a prefix for clarity and splitting lines.
     *
     * @param string $command The command being executed.
     * @param string $output The raw output of the command.
     * @return string The formatted output.
     */
    private function formatOutput($command, $output)
    {
        $lines = explode("\n", trim($output)); // Split by newlines and remove trailing whitespace
        $formattedLines = array_map(fn($line) => "[{$command}] $line", $lines); // Add a prefix for each line
        return implode(PHP_EOL, $formattedLines); // Join formatted lines with line breaks
    }
}
