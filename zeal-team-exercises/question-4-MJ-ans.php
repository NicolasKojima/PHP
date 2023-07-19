<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4ans
    </title>
</head>
<body>
    <?php
    $size = 5; // size of the diamond shape
    
    // upper half of the diamond
    for ($i = 1; $i <= $size; $i++) {
        for ($j = 1; $j <= $size - $i; $j++) {
            echo "&nbsp;"; // print spaces for left half
        }
        for ($j = 1; $j <= $i; $j++) {
            echo "* "; // print asterisks for left half
        }
        echo "<br>"; // move to the next line
    }
    
    // lower half of the diamond
    for ($i = $size - 1; $i >= 1; $i--) {
        for ($j = 1; $j <= $size - $i; $j++) {
            echo "&nbsp;"; // print spaces for right half
        }
        for ($j = 1; $j <= $i; $j++) {
            echo "* "; // print asterisks for right half
        }
        echo "<br>"; // move to the next line
    }
    ?>
</body>
</html>