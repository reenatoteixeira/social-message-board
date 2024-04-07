<?php

$config = [
  'host' => 'localhost',
  'dbname' => 'social_messages_db',
  'username' => 'root',
  'password' => '123456'
];

$pdo = new PDO("mysql:host={$config['host']};dbname={$config['dbname']}", $config['username'], $config['password']);
