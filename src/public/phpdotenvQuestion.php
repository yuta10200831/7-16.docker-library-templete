<!-- 問題回答 -->
<?php


require '/var/www/html/vendor/autoload.php';

use Dotenv\Dotenv;

$dotenvPath = '/var/www/html/app';
if (!file_exists($dotenvPath . '/.env')) {
    die('環境設定ファイル .env が見つかりません！');
}

$dotenv = Dotenv::createImmutable($dotenvPath);
$dotenv->load();

if (!isset($_ENV["APP_ENV"])) {
    die('APP_ENV 環境変数が設定されていません！');
}

$environment = $_ENV["APP_ENV"];

if ($environment === "PRODUCTION") {
    echo "本番環境です";
} else {
    echo "開発環境です";
}
