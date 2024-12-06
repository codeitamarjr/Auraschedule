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
     * This command will update the project by pulling latest changes, running migrations,
     * updating dependencies, and building assets.
     *
     * It will also log the result of the update and send a notification to the admin
     * with the result of the update.
     *
     * If the update fails, it will log the error and send a notification to the admin
     * with the error message.
     */
    public function handle()
    {
        try {
            // Discard local changes
            $this->executeShellCommand('git reset --hard');

            // Pull latest changes
            $this->executeShellCommand('git pull');

            // Run migrations
            $this->executeShellCommand('php artisan migrate --force');

            // Update Composer dependencies
            $this->executeShellCommand('composer install --no-interaction --optimize-autoloader');

            // Run NPM build
            $this->executeShellCommand('npm install && npm run build');

            // Log success
            Log::info('Project updated successfully.');

            // Send notification
            Notification::route('mail', 'hello@itjunior.dev')
                ->notify(new ProjectUpdateNotification('Project updated successfully.'));

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
     * Executes a shell command using Symfony's Process component.
     *
     * @param string $command The shell command to execute.
     * 
     * @throws \RuntimeException If the command execution fails.
     */
    private function executeShellCommand($command)
    {
        $process = \Symfony\Component\Process\Process::fromShellCommandline($command);
        $process->setTimeout(300);
        $process->run();

        if (!$process->isSuccessful()) {
            throw new \RuntimeException($process->getErrorOutput());
        }

        $this->info($process->getOutput());
    }
}
