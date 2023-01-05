<!--
Names: Ron Nguyen, Jack (Zhenhuai) Zeng
Date: 1/5/2023
URL: https://github.com/ronnguyen1011/cupcakes ||| https://nguyenron.greenriverdev.com/328/cupcakes/
Description: This program contains a form for a cupcake fundraiser. The program will show the options and total price
that the user selected
-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcakes</title>
</head>
<body>
    <?php
        $flavors = $_POST['flavor'];
        $size = sizeof($flavors);
        if(($_POST['name']) != "" && $size >= 1)
        {
            echo "<p> Thank you, ".$_POST['name']. ", for your order! </p>";
            echo "<p>Order summary: </p><br>";
            foreach($flavors as $element)
            {
                echo "<li> ". $element . "</li><br>";
            }
            echo "<p> Order Total: $". 3.50*$size . "</p>";
        }
        else
        {
            echo "Please enter your name and checked at least one box";
            echo "<br><a href='index.php'> Please click here to go back to home page </a>";
        }
    ?>
</body>
</html>