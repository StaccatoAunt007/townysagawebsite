<?php

return [
  'mysql' => [
    'host' => '127.0.0.1',
    'port' => '3306',
    'username' => 'townysag_staccato',
    'password' => 'Cg11172003!',
    'db' => 'townysag_namelessmc',
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'initialise_charset' => true,
    'initialise_collation' => true,
  ],
  'remember' => [
    'cookie_name' => 'nl2',
    'cookie_expiry' => 604800,
  ],
  'session' => [
    'session_name' => '2user',
    'admin_name' => '2admin',
    'token_name' => '2token',
  ],
  'core' => [
    'hostname' => 'townysaga.com',
    'path' => '',
    'friendly' => true,
    'force_https' => false,
    'force_www' => false,
    'captcha' => false,
    'date_format' => 'd M Y, H:i',
    'trustedProxies' => NULL,
    'installed' => true,
  ],
];