<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Strings</title>
</head>
<body>
<?php
    echo "Hello World <br />";
    echo 'Hello World <br />';

    $greeting = "Hello";
    $target = "World";
    $phrase = $greeting ." ". $target;
    echo $phrase;
?>
<br />
<?php

echo "$phrase Again<br />";
echo '$phrase Again<br />';
echo "{$phrase}Again <br />";
?>

</body>
</html>