<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .first{
     width:70%;
     height:300px;
     position:absolute;
     border:1px solid red;
    }
    .after{
    border:2px solid blue;
    width:40%;
    height:200px;
        position: relative;
    top:315px;
    }
    </style>
</head>
<body>
    Name: <input type="text" name="name">
    E-mail: <input type="text" email="email">
    Website: <input type="text" website="website">
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>

    Gender:
    <input type="radio" name="gender" value="male"> Male 
    <input type="radio" name="gender" value="female"> Female 
    <input type="radio" name="gender" value="other"> other

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
</body>
</html>