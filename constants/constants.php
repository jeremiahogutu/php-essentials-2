<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Constants</title>
</head>
<body>
    <?php
    $max_width = 980;
    define("MAX_WIDTH", 980);
    echo MAX_WIDTH;
    ?>
    <br />
    <?php // can't change the value
//    MAX_WIDTH = MAX_WIDTH + 1;
//    echo MAX_WIDTH;
    ?>

    <?php //can't even redefine it
//    define("MAX_WIDTH", 981);
//    echo MAX_WIDTH;
    ?>
</body>
</html>