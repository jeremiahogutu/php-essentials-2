<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Null and Empty</title>
</head>
<body>
    <?php
    $var1 = null;
    $var2 = "";
    ?>

    var1 null? <?php echo is_null($var1); ?><br />
    var2 null? <?php echo is_null($var2); ?><br />
    var3 null? <?php echo is_null($var3); ?><br />
<br />
    var1 is set? <?php echo isset($var1); ?><br />
    var2 is set? <?php echo isset($var2); ?><br />
    var3 is set? <?php echo isset($var3); ?><br />
<br />
    <?php //Considered empty: "", null, 0, 0.0, "0", false, array() ?>

    <?php $var3 = "0"; ?>
    var1 is empty? <?php echo empty($var1); ?><br />
    var2 is empty? <?php echo empty($var2); ?><br />
    var3 is empty? <?php echo empty($var3); ?><br />
<br />
</body>
</html>