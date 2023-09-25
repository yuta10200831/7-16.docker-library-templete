<?php
require '/var/www/html/vendor/autoload.php';

use Carbon\Carbon;

// 現在の日時を取得
$now = Carbon::now();

// 半年後の日時を取得
$halfYearLater = $now->copy()->addMonths(6);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Carbon Test</title>
</head>
<body>
    <h1><?php echo $halfYearLater->format('Y年m月d日 H:i:s'); ?></h1>
</body>
</html>
