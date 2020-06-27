<?php

/**
 * @file
 * Custom configuration for Lando environment.
 */

$lando_info = json_decode(getenv('LANDO_INFO'), TRUE);

$databases['default']['default'] = [
  'driver' => 'mysql',
  'database' => $lando_info['database']['creds']['database'],
  'username' => $lando_info['database']['creds']['user'],
  'password' => $lando_info['database']['creds']['password'],
  'host' => $lando_info['database']['internal_connection']['host'],
  'port' => $lando_info['database']['internal_connection']['port'],
];

$settings['config_sync_directory'] = '../config/sync';

$settings['hash_salt'] = '_e7fmfWorcSw_nb7yTMq_WImK3-lxH7ZFvf-UC0hQ9Iges74W0CxYz6uZZlEXQgYulabf03mQg';

// Disable css/js aggregation.
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

// Don't harden the files folder locally.
$settings['skip_permissions_hardening'] = TRUE;

// Show all errors.
ini_set('error_reporting', E_ALL);
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
$config['system.logging']['error_level'] = 'verbose';
