<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Associative Arrays</title>
</head>
<body>
    <?php $assoc =  array("first_name" => "Jeremiah", "last_name" => "Ogutu"); ?>
    <?php echo $assoc["first_name"]?><br />
    <?php echo $assoc["first_name"]. " " . $assoc["last_name"];?><br />

    <?php $assoc["first_name"] = "James"; ?>
    <?php echo $assoc["first_name"]. " " . $assoc["last_name"];?><br />

    <?php // echo $assoc[0]; ?><br />
    <?php $numbers = array(4,8,15,16,23,42) ?>
    <?php $numbers = array(0 => 4, 1 => 8, 2 => 15, 3 => 16, 4 => 23, 5 => 42)?>
    <?php echo $numbers[0]; ?>
</body>
</html>