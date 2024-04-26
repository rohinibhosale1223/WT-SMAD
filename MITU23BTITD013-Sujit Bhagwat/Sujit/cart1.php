<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Game Shop</title>
  <style>
    /* Styles CSS */
    body {
      font-family: Arial, sans-serif;
      background-color: lavender;
      margin: 0;
      padding: 0;
    }
    h1 {
      text-align: center;
      color: #333;
      margin-top: 50px;
    }
    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      padding: 20px;
    }
    .product {
      width: 250px;
      border: 1px solid #ddd;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }
    .product:hover {
      transform: translateY(-5px);
    }
    .product img {
      width: 100%;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }
    .product-content {
      padding: 10px;
    }
    .product h3 {
      text-align: center;
      color: #333;
      margin-bottom: 5px;
    }
    .product p {
      text-align: center;
      color: #666;
      margin-bottom: 10px;
    }
    .product button {
      display: block;
      margin: 0 auto;
      padding: 8px 16px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 20px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .product button:hover {
      background-color: #0056b3;
    }
    #cart {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin-top: 30px;
      text-align: center;
      transition: transform 0.3s ease;
    }
    #cart:hover {
      transform: scale(1.02);
    }
    #cart h2 {
      color: #333;
      margin-bottom: 20px;
    }
    #cart p {
      color: #666;
      margin-bottom: 10px;
    }
    #cart #totalPrice {
      font-weight: bold;
      color: #333;
    }
    .checkout-button {
      display: inline-block;
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      text-decoration: none;
      border-radius: 20px;
      transition: background-color 0.3s ease;
    }
    .checkout-button:hover {
      background-color: #0056b3;
    }
    /* New styles for remove button */
    .remove-button {
      display: block;
      margin: 10px auto;
      padding: 8px 16px;
      background-color: #dc3545;
      color: #fff;
      border: none;
      border-radius: 20px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .remove-button:hover {
      background-color: #c82333;
    }
  </style>
</head>
<body>

  <h1>Game Shop</h1>

  <div class="container">
    <!-- Product cards -->
    <div class="product">
      <img src="9.jpg" alt="Product 1">
      <div class="product-content">
        <h3>Product 1</h3>
        <p>Price: $500</p>
        <button onclick="addToCart(500)">Add to Cart</button>
      </div>
    </div>

    <div class="product">
      <img src="90.jpeg" alt="Product 2">
      <div class="product-content">
        <h3>Product 2</h3>
        <p>Price: $600</p>
        <button onclick="addToCart(600)">Add to Cart</button>
      </div>
    </div>
    
    <div class="product">
      <img src="99.jpeg" alt="Product 3">
      <div class="product-content">
        <h3>Product 3</h3>
        <p>Price: $550</p>
        <button onclick="addToCart(550)">Add to Cart</button>
      </div>
    </div>
  </div>

  <!-- Cart section -->
  <div id="cart">
    <h2>Cart</h2>
    <div id="cart-items">
      <!-- Cart items will be displayed here -->
    </div>
    <p>Total Price: $<span id="totalPrice">0</span></p>
    <a href="billing.html" class="checkout-button">Checkout</a>
  </div>

  <script>
    let totalPrice = 0;

    function addToCart(price) {
      // Increment total price
      totalPrice += price;
      
      // Update total price in the cart
      document.getElementById('totalPrice').innerText = totalPrice;

      // Create a new cart item
      const cartItems = document.getElementById('cart-items');
      const newItem = document.createElement('div');
      newItem.innerHTML = `
        <div class="cart-item">
          <p>Product: $${price}</p>
          <button class="remove-button" onclick="removeFromCart(${price})">Remove</button>
        </div>
      `;
      cartItems.appendChild(newItem);
    }

    function removeFromCart(price) {
      // Decrement total price
      totalPrice -= price;

      // Update total price in the cart
      document.getElementById('totalPrice').innerText = totalPrice;

      // Remove the item from the cart
      event.target.parentNode.remove();
    }
  </script>
</body>
</html>
