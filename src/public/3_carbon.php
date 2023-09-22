<?php
require '/var/www/html/vendor/autoload.php';

use Carbon\Carbon;

// 現在の日時を取得
$now = Carbon::now();

// 年の中で何日目かを取得
$dayOfYear = $now->dayOfYear;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Carbon Test</title>
</head>
<body>
    <h1><?php echo $dayOfYear . '日'; ?></h1>
</body>
</html>
