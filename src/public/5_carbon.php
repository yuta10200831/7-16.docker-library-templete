<?php
require '/var/www/html/vendor/autoload.php';

use Carbon\Carbon;

// 現在の日時を取得
$now = Carbon::now();

// 月の中で何週目かを取得
$weekOfMonth = $now->weekOfMonth;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Carbon Test</title>
</head>
<body>
    <h1><?php echo $weekOfMonth; ?></h1>
</body>
</html>
