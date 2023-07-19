<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
</head>
<body>
    <?php

    $x = 5;
    function myTest_1() {
        echo "<p> my test 1 - <b> global env </b>";
        echo "<p> Variable x inside function is: $x</p>"; 
    }
    myTest_1();
    echo "<p> Variable x outside function is: $x</p>";

    echo " \n \n ";

    function myTest_2() {
        $y = 13;
        echo "<p> my test 2 - <b> local env </b></p>";
        echo "<p> Variable x inside function is: $y</p>";
    }
    myTest_2();
    echo "<p> Variable x outside function is: $x<p>";
    
    // calling on a global function inside of a local env

    $a = 15;
    $b = 28;
    function myTest_3(){
        echo "<p> my test 3 - <b> calling global var in local env </b> </p>";
        global $a, $b;
        echo "<p> a is $a </p>";
        echo "<p> b is $b </p>";
        $b = $a + $b;
        echo "<p> b is now $b </p>";
    }
    myTest_3();

    // another way of calling on a global function inside of a local env

    $c = 50;
    $d = 89;
    function myTest_4() {
        echo "<p> my test 4 - <b> calling global var in local env - method 2</b> </p>";
        echo "<p> c is </p>" . $GLOBALS['c'];
        echo "<p> d is </p>" . $GLOBALS['d'];
        $GLOBALS['c'] = $GLOBALS['c'] + $GLOBALS['d'];
        echo "<p> the new c is </p>" . $GLOBALS['c'] . "<br>" . "<br>";
    }
    myTest_4();

    // static variable 

    function myTest_5() {
        static $e = 0;
        echo $e;
        $e++;
    }
    myTest_5(); echo "<br>";
    myTest_5(); echo "<br>";
    myTest_5(); echo "<br>";


    ?>
</body>
</html>