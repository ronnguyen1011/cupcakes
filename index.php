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
<h1>Cupcake Fundraiser</h1>
<form method = "post" action = "process.php">
    <p>Your Name:</p>
    <input type="text" placeholder="Please enter your name" name="name">
    <p>Cupcake flavors</p>
    <input type = 'checkbox' name = 'flavor[]' value = "The Grasshopper"> The Grasshopper  <br>
    <input type = 'checkbox' name = 'flavor[]' value = "Whiskey Maple Bacon"> Whiskey Maple Bacon <br>
    <input type = 'checkbox' name = 'flavor[]' value = "Carrot Walnut"> Carrot Walnut <br>
    <input type = 'checkbox' name = 'flavor[]' value = "Salted Caramel Cupcake"> Salted Caramel Cupcake <br>
    <input type = 'checkbox' name = 'flavor[]' value = "Red Velvet"> Red Velvet <br>
    <input type = 'checkbox' name = 'flavor[]' value = "Lemon Drop"> Lemon Drop <br>
    <input type = 'checkbox' name = 'flavor[]' value = "Tiramisu"> Tiramisu <br> <br>
    <input type = 'submit' value = "Order">
</form>


</body>
</html>