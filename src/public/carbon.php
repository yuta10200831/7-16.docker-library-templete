<?php
require '/var/www/html/vendor/autoload.php';

use Carbon\Carbon;

$now = Carbon::now();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Carbon Test</title>
</head>
<body>
    <h1><?php echo $now->format('Y年m月d日 H:i:s'); ?></h1>
</body>
</html>
