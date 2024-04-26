<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Shopping Cart</title>
</head>
<body>

<h2>My Shopping Cart</h2>

<form action="/add-to-cart" method="post">
  <label for="item">Item:</label><br>
  <input type="text" id="item" name="item" required><br>
  <label for="quantity">Quantity:</label><br>
  <input type="number" id="quantity" name="quantity" min="1" value="1" required><br><br>
  <input type="submit" value="Add to Cart">
</form>

</body>
</html>
