<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Return values</title>
</head>
<body>
<?php
    function add ($val1, $val2) {
        $sum = $val1 + $val2;
        return $sum;
    }
    $result = add(3,4);
    $result2 = add(5 , $result);
    echo $result2 ;
?>
<br />
<?php
function chineseZodiac ($year) {
    switch (($year - 4) % 12) {
        case 0: return 'Rat';
        case 1: return 'Ox';
        case 2: return 'Tiger';
        case 3: return 'Rabbit';
        case 4: return 'Dragon';
        case 5: return 'Snake';
        case 6: return 'Horse';
        case 7: return 'Goat';
        case 8: return 'Monkey';
        case 9: return 'Rooster';
        case 10: return 'Dog';
        case 11: return 'Pig';
    }
}

$zodiac = chineseZodiac(2013);
echo "2013 is the year of the {$zodiac}.<br />";

echo "2027 is the year of the " . chineseZodiac(2027) . ". <br />";

?>
<br />
<?php
    function better_hello($greeting, $target, $punct) {
        return $greeting . " " . $target . $punct . "<br />";
    }
    echo better_hello("Hello", "John Doe", "!");
?>
</body>
</html>