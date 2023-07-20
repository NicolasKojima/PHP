<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asdf</title>
</head>
<body>
    <?php

    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like" . $ccars[0] . ", " . $cars[1] . " and " . $cars[2] . ". <br>";

    echo count($cars) . "<br>";
    $count = count($cars);

    for ($x = 0; $x < $count; $x++) {
        echo $cars[$x];
        echo "<br>";
    }

    $cars = array("Volvo"=>"10,000", "BMW"=>"50,000", "Toyota"=>"25,000");
    echo /** $cars[0] this does not exist anymore **/ "Volvo is " . $cars['Volvo'] . " dollars.";

    $cars1 = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
      );

    echo $cars1 . "<br>" . "<br>" . "<br>";      

    echo $cars1[0][0].": In stock: ".$cars1[0][1].", sold: ".$cars1[0][2].".<br>";
    echo $cars1[1][0].": In stock: ".$cars1[1][1].", sold: ".$cars1[1][2].".<br>";
    echo $cars1[2][0].": In stock: ".$cars1[2][1].", sold: ".$cars1[2][2].".<br>";
    echo $cars1[3][0].": In stock: ".$cars1[3][1].", sold: ".$cars1[3][2].".<br>";

    echo "<br>" . "<br>" . "<br>";

    for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
          echo "<li>".$cars[$row][$col]."</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>