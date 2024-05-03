// cart.js

// Function to add item to cart
function addToCart() {
    var productName = document.getElementById('productName').textContent;
    var quantity = document.getElementById('quantity').value;

    // Retrieve cart items from local storage
    var cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

    // Check if the product is already in the cart
    var existingItemIndex = cartItems.findIndex(item => item.productName === productName);

    if (existingItemIndex !== -1) {
        // If product already exists, update the quantity
        cartItems[existingItemIndex].quantity += parseInt(quantity);
    } else {
        // If product doesn't exist, add it to the cart
        cartItems.push({
            productName: productName,
            quantity: parseInt(quantity)
        });
    }

    // Store updated cart items back to local storage
    localStorage.setItem('cartItems', JSON.stringify(cartItems));

    // Redirect the user to the cart page
    window.location.href = 'cart.html';
}

// Function to display cart items
function displayCartItems() {
    // Retrieve cart items from local storage
    var cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

    var cartItemsDiv = document.getElementById('cartItems');
    cartItemsDiv.innerHTML = '';

    if (cartItems.length === 0) {
        cartItemsDiv.innerHTML = '<p>Your cart is empty.</p>';
    } else {
        // Create HTML to display each cart item
        var cartItemsHTML = '<ul>';
        cartItems.forEach(function(item) {
            cartItemsHTML += '<li>' + item.productName + ' - Quantity: ' + item.quantity +
                             ' <button class="remove-button" onclick="removeItem(\'' + item.productName + '\')">Remove</button></li>';
        });
        cartItemsHTML += '</ul>';

        cartItemsDiv.innerHTML = cartItemsHTML;
    }
}

// Function to remove item from cart
function removeItem(productName) {
    // Retrieve cart items from local storage
    var cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

    // Find the index of the item to remove
    var index = cartItems.findIndex(item => item.productName === productName);

    if (index !== -1) {
        // Remove the item from the cart
        cartItems.splice(index, 1);

        // Store updated cart items back to local storage
        localStorage.setItem('cartItems', JSON.stringify(cartItems));

        // Reload the page to reflect the changes
        displayCartItems();
    }
}

// Function to empty the cart
function emptyCart() {
    // Clear the cart items from local storage
    localStorage.removeItem('cartItems');

    // Reload the page to reflect the changes
    displayCartItems();
}

// Call the displayCartItems function when the page loads
window.onload = function() {
    displayCartItems();
};
