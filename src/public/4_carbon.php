<?php
require '/var/www/html/vendor/autoload.php';

use Carbon\Carbon;

// 現在の日時を取得
$now = Carbon::now();

// 今年の西暦を取得
$currentYear = $now->year;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Carbon Test</title>
</head>
<body>
    <h1><?php echo '今年は' . $currentYear . '年'; ?></h1>
</body>
</html>
