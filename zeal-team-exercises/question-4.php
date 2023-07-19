<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $loop = 4;
    $stars = 1; $num = 1; $star = "*"; $space = " &nbsp; "; $space_star = " &nbsp; " . "*"; $in = 0; $out = $loop;

    function center(){
        global $space_star, $star, $in;
        echo $star . str_repeat($space_star, $in);
    }

    for ($i = 0; $i <= $loop; $i++) {
        $num = 0;
        while ($num < $stars){
            echo str_repeat($space, $out);
            center();
            echo str_repeat($space, $out);
            $num++;
            $out--;
            $in++;
            echo "<br>";
            }
    
    } $out+= 2; $in = $in - 2; $i = 0;

    for ($i = 0; $i <= $out; $i++) {
        $num = 0;
        while ($num < $stars){
            echo str_repeat($space, $out);
            center();
            echo str_repeat($space, $out);
            $num++;
            $out++;
            $in--;
            echo "<br>";
            }
        $stars++;
        }
    ?>
</body>
</html>