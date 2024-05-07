document.addEventListener("DOMContentLoaded", function() {
    const cartItemsSection = document.querySelector('.cart-items');

    // Retrieve cart items from local storage
    let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

    // Function to update cart display
    function updateCartDisplay() {
        // Check if the cart is empty
        if (cartItems.length === 0) {
            cartItemsSection.innerHTML = '<p>Your cart is empty.</p>';
        } else {
            // Display cart items dynamically
            cartItemsSection.innerHTML = ''; // Clear previous items
            cartItems.forEach(item => {
                const article = document.createElement('article');
                const itemName = document.createElement('p');
                itemName.textContent = item;
                const removeButton = document.createElement('button');
                removeButton.textContent = 'Remove';
                removeButton.addEventListener('click', function() {
                    // Remove item from cartItems array and update cart display
                    cartItems.splice(cartItems.indexOf(item), 1);
                    updateCartDisplay(); // Update cart display after removing item
                    // Update local storage with the modified cart items
                    localStorage.setItem('cartItems', JSON.stringify(cartItems));
                });
                article.appendChild(itemName);
                article.appendChild(removeButton);
                cartItemsSection.appendChild(article);
            });
        }
    }

    // Initial update of cart display
    updateCartDisplay();

    // Function to add item to cart
    function addToCart(item) {
        // Add the new item to the cart
        cartItems.push(item);

        // Store the updated cart items in local storage
        localStorage.setItem('cartItems', JSON.stringify(cartItems));

        // Redirect to the cart page
        window.location.href = 'cart.html';
    }

    // Add event listener to all elements with the class 'add-to-cart'
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Extract the game name from the parent node's text content
            const gameName = this.parentNode.textContent.trim().split(' ')[0];
            addToCart(gameName);
        });
    });
});
