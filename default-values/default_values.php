<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Default values</title>
</head>
<body>
<?php
    function paint ($room = "office",$color="red") {
        return "The color of the {$room} is {$color}.<br />";
    }

    echo paint();
    echo paint("bedroom", "blue");
    echo paint("bedroom", null);
    echo paint("bedroom");
?>
</body>
</html>