<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch Statements</title>
</head>
<body>
<?php
    $a = 9;
    switch ($a) {
        case 0:
            echo "a equals 0<br />";
            break;
        case 1:
            echo "a equals 1<br />";
            break;
        case 2:
            echo "a equals 2<br />";
            break;
        case 3:
            echo "a equals 3<br />";
            break;
        default:
            echo "a is not 0, 1, 2 or 3<br />";
    }
?>

<?php
// ChineseZodiac
// Whitespace doesn't matter
// colons, semicolons and breaks do
$year = 2013;
switch (($year - 4) % 12) {
    case 0:
        $zodiac = 'Rat';
        break;
    case 1:
        $zodiac = 'Ox';
        break;
    case 2:
        $zodiac = 'Tiger';
        break;
    case 3:
        $zodiac = 'Rabbit';
        break;
    case 4:
        $zodiac = 'Dragon';
        break;
    case 5:
        $zodiac = 'Snake';
        break;
    case 6:
        $zodiac = 'Horse';
        break;
    case 7:
        $zodiac = 'Goat';
        break;
    case 8:
        $zodiac = 'Monkey';
        break;
    case 9:
        $zodiac = 'Rooster';
        break;
    case 10:
        $zodiac = 'Dog';
        break;
    case 11:
        $zodiac = 'Pig';
        break;
}

echo "{$year} is the year of the {$zodiac}.<br />";

?>
<?php // case with multiple
    $user_type = 'customer';

    switch ($user_type) {
        case 'student':
            echo "welcome";
            break;
        case 'press':
        case 'customer':
        case 'admin':
            echo "Hello!";
            break;
    }
?>
</body>
</html>