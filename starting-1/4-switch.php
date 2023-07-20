<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    switch (n) {
        case label1:
            //code to be executed if n=label1;
            break;
        case label2:
            //code to be executed if n=label1;
            break;
        case label3:
            //code to be executed if n=label1;
            break;
        case label4:
            //code to be executed if n=label1;
            break;
        default:
            // code to be executed if n is different from all labels
    }

    $favcolor = 'red';

    switch ($favcolor) {
        case 'red':
            echo "your favorite color is red";
        case 'blue':
            echo "your favorite color is blue";
        case 'pink':
            echo "your favorite color is pink";
        default: 
        echo "Your favorite color is neither red, blue, nor pink";

    }
    ?>
</body>
</html>