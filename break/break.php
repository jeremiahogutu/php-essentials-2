<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Break</title>
</head>
<body>
<?php
    for ($count = 0; $count <= 10; $count++) {
        if ($count == 5) {
            break;
        }
        echo $count . ", ";
    }
?>
<br />
<?php // loop inside a loop with continue
for ($i = 0; $i <= 5; $i++) {
    if ($i % 2 == 0) {
        continue(1);
    }
    for ($k = 0; $k <= 5; $k++) {
        if ($k == 3) {
            break(2);
        }
        echo $i . "-" . $k . "<br />";
    }
}
?>
</body>
</html>