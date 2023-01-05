<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cupcake</title>
</head>
<body>
<
<h1>Cupcake Fundraiser</h1>
<form method = "post" action = "process.php">
    <p>Your Name:</p>
    <input type="text" value = "Please input your name" name="name">
    <p>Cupcake flavors</p>
    <input type = 'checkbox' name = 'flavor[]' value = "grass"> The Grasshopper  <br>
    <input type = 'checkbox' name = 'flavor[]' value = "bacon"> Whiskey Maple Bacon <br>
    <input type = 'checkbox' name = 'flavor[]' value = "walnut"> Carrot Walnut <br>
    <input type = 'checkbox' name = 'flavor[]' value = "caramel"> Salted Caramel Cupcake <br>
    <input type = 'checkbox' name = 'flavor[]' value = "velvet"> Red Velvet <br>
    <input type = 'checkbox' name = 'flavor[]' value = "lemon"> Lemon Drop <br>
    <input type = 'checkbox' name = 'flavor[]' value = "tiramisu"> Tiramisu <br> <br>
    <input type = 'submit' value = "Order">
</form>


</body>
</html>