<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function Arguments</title>
</head>
<body>
<?php
    function say_hello_to($word) {
        echo "Hello {$word}! <br />";
    }

    $name = "John Doe";
    say_hello_to($name);
?>
<?php
    function better_hello($greeting, $target, $punct) {
        echo $greeting . " " . $target . $punct . "<br />";
    }

    better_hello("Hello", $name, "!");
    better_hello("Greetings", $name, "!!!" );
    better_hello("Greetings", $name, null );
?>
</body>
</html>