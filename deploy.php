<?php
date_default_timezone_set('Europe/Stockholm');

include_once 'vendor/deployer/deployer/recipe/laravel.php';

server( 'development', 'vasterasaren.dev' )
    ->env('deploy_path','/var/www/vasterasaren.dev')
    ->env('branch', 'master')
    ->user( 'vagrant', 'vagrant' );

server( 'production', '139.162.153.215', 22 )
    ->env( 'deploy_path', '/mnt/persist/www/vasterasaren.se' )
    ->user( 'root' )
    ->env( 'branch', 'master' )
    ->stage( 'production' )
    ->identityFile();

set('repository', 'git@github.com:ekandreas/vasterasaren.dev.git');

set('env', 'prod');
set('keep_releases', 10);
set('env_vars', '/usr/bin/env');

