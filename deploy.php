<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config
set('application', 'AWOESO');
set('repository', 'https://github.com/HermanCeaser/awoesa-website.git');
set('ssh_multiplexing', true);  // Speed up deployment
//set('default_timeout', 1000);

set('rsync_src', function () {
    return __DIR__; // If your project isn't in the root, you'll need to change this.
});

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

add('rsync', [
    'exclude' => [
        '.git',
        '/vendor/',
        '/node_modules/',
        '.github',
        'deploy.php',
    ],
]);


// Hosts

host('http://awoeso.org')
    ->set('remote_user', 'deployer');
    // ->set('deploy_path', '/var/www/awoeso');

// Hooks

after('deploy:failed', 'deploy:unlock');
