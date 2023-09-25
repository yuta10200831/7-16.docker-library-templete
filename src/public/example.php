<?php

require '/var/www/html/vendor/autoload.php';

use Dotenv\Dotenv;

$dotenvPath = '/var/www/html/app';
if (!file_exists($dotenvPath . '/.env')) {
    die('環境設定ファイル .env が見つかりません！');
}

$dotenv = Dotenv::createImmutable($dotenvPath);
$dotenv->load();

if (!isset($_ENV["MY_SCHOOL"])) {
    die('MY_SCHOOL 環境変数が設定されていません！');
}

echo $_ENV["MY_SCHOOL"];
