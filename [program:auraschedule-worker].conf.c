[program:auraschedule-worker]
process_name=%(program_name)s_%(process_num)02d
command=php /var/www/auraschedule/artisan queue:work --sleep=3 --tries=3
autostart=true
autorestart=true
numprocs=1
user=www-data
redirect_stderr=true
stdout_logfile=/var/www/auraschedule/storage/logs/worker.log
