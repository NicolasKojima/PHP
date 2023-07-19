<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($x = 0; $x <= 300; $x++) {

        $is_prime = true;
        
         for ($y = 2; $y < $x; $y++) {
            if ($x % $y == 0) {
                 $is_prime = false; break; } } 
            if ($is_prime) { echo $x . ","; } }
    ?>
</body>
</html>