<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>For each loop</title>
</head>
<body>
<?php
    $ages = array(4,8,15,16,23,42);
    foreach ($ages as $age) {
        echo "Age: {$age}<br />";
    }
?>
<br />
<?php // foreach using assoc. array
    $person = array(
                "first_name" => "Jeremiah",
                "last_name" => "Ogutu",
                "address" => "123 road east",
                "city" => "placeville",
                "state" => "TX",
                "Zip Code" => "76120"
    );
    foreach ($person as $attribute => $data ){
        $attr_nice = ucwords(str_replace("_","", $attribute));
        echo "{$attr_nice}: {$data}<br />";
    }
?>
<br />
<?php
    $prices = array("Brand New Computer" => 2000,
                    "1 month" => 25,
                    "Learning php" => null);

    foreach ($prices as $item => $price) {
        echo "$item: ";
        if (is_int($price)) {
            echo "$" . $price;
        } else {
            echo "priceless";
        }
        echo "<br />";
    }
?>
</body>
</html>