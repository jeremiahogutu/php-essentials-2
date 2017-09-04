<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Defining functions</title>
</head>
<body>
<?php
    function say_hello() {
        echo "Hello world! <br />";
    }

    say_hello();

    function say_hello_to($word) {
        echo "Hello {$word}! <br />";
    }

    say_hello_to("World");
    say_hello_to("Everyone");

    say_hello_loudly();

    function say_hello_loudly () {
        $str = strtoupper("hello world");
        echo "{$str}<br />";
    }
?>
</body>
</html>