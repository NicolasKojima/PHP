<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$loop = 10;
$stars = 1;
$num = 1; 
$star = "*"; 
$space = " &nbsp; "; 
$space_center = " &nbsp; " . " &nbsp; "; 
$in = 0; 
$out = $loop;

function center(){
    global $space_center, $star, $in;
    echo str_repeat($space_center, $in);
    }

for ($i = 0; $i <= $loop; $i++) {
    $num = 0;
    while ($num < $stars){
        echo str_repeat($star, $out);
        if ($i > 0){
            center();
        }
        echo str_repeat($star, $out);
        $num++;
        $out--;
        $in++;
        echo "<br>";
        }
    }

?>
</body>
</html>