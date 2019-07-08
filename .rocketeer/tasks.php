<?php
use Rocketeer\Facades\Rocketeer;

// These run on the remove server, in the current release dir
Rocketeer::task('composer-install', 'composer install');
Rocketeer::task('composer-optimize', 'composer dump-autoload -o');
Rocketeer::task('artisan-migrate', 'php artisan migrate --force');
Rocketeer::task('artisan-view-clear', 'php artisan view:clear');

