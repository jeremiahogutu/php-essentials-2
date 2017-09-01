<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>
</head>
<body>
    <?php
    $numbers = array(4,8,15,16,23,42);
    echo $numbers[1];
    ?>
    <br />
    <?php $mixed = array(6, "fox", "dog", array("x", "y", "z")); ?>
    <?php echo $mixed[2]; ?><br />


    <?php echo $mixed[3][1]; ?><br />
    <?php $mixed[2] = "cat"; ?><br />
    <?php $mixed[4] = "mouse"; ?><br />
    <?php $mixed[] = "horse"; ?><br />

    <pre>
        <?php print_r($mixed)?><br />
    </pre>

    <?php
    $array = [1,2,3];
    ?>
</body>
</html>