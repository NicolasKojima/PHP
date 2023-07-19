<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $loop = 4;
    $star = 1;
    $num = 1;

    #$star = "*";
    $space = " ";

    for ($i = 0; $i <= $loop; $i++) {
        $num = 0;
        while ($num < $star){
            echo " * ";
            $num++;
            }
        $star++;
        echo "<br>";
    }
    ?>
</body>
</html>