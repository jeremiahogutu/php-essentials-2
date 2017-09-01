<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array functions</title>
</head>
<body>
    <?php $numbers = array(8,23,15,42,16,4); ?>

    count: <?php echo count($numbers); ?><br />
    max value: <?php echo max($numbers); ?><br />
    min value: <?php echo min($numbers); ?><br />
<br />
    <pre>
    sort: <?php sort($numbers); print_r($numbers); ?><br />
    Reverse sort: <?php rsort($numbers); print_r($numbers); ?><br />
    </pre>

    Implode: <?php echo $num_string = implode(" * ", $numbers)?><br />
    Explode: <?php print_r(explode(" * ", $num_string)); ?><br />
<br />

    15 in array?: <?php echo in_array(15, $numbers) ?><br />
    18 in array?: <?php echo in_array(18, $numbers) ?><br />
</body>
</html>