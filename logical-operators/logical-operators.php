<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comparison and logical operators</title>
</head>
<body>
<?php
    $a = 4;
    $b = 3;
    $c = 1;
    $d = 20;
    if (($a >= $b) || ($c >= $d)) {
        echo "a is larger than b AND ";
        echo "c is larger than d";
    }
?>
<br />
<?php
    $e = 100;
    if (!isset($e)) {
        $e = 200;
    }
    echo $e;
?>
<br />
<?php
// don't reject 0 or 0.0
$quantity = "";
if (empty($quantity) && !is_numeric($quantity)) {
    echo "You must enter a quantity";
}
?>
</body>
</html>