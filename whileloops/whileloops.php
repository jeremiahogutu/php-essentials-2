<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>While loops</title>
</head>
<body>
<?php
    $count = 0;
    while($count <= 10) {
        if ($count == 5) {
            echo "FIVE, ";
        } else {
            echo $count . ",";
        }
        $count++; //increment by 1
    }

    echo "<br />";
    echo "Count: {$count}";

?>


</body>
</html>