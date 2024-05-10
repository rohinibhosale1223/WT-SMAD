$(document).ready(function() {
    $('#loginForm').submit(function(e) {
        e.preventDefault();
        var username = $('#loginUsername').val();
        var password = $('#loginPassword').val();
        
        // Perform login logic here (replace this with your own validation logic)
        if (username === 'shreya' && password === '1234') {
            window.location.href = 'home.html'; // Redirect to home page
        } else {
            alert('Invalid username or password');
        }
    });
});

$(document).ready(function() {
    // Add to Cart button
    $('.addToCart').click(function() {
        var bookTitle = $(this).siblings('.book-title').text();
        // Store the added book in localStorage
        var cartItems = JSON.parse(localStorage.getItem('cart')) || [];
        cartItems.push(bookTitle);
        localStorage.setItem('cart', JSON.stringify(cartItems));
        alert('Added ' + bookTitle + ' to cart!');
    });

    // View Cart button
    $('#viewCart').click(function() {
        window.location.href = 'cart.html'; // Redirect to the cart page
    });

    // Retrieve cart items from localStorage for cart.html
    if (window.location.pathname.includes('cart.html')) {
        var cartItems = JSON.parse(localStorage.getItem('cart')) || [];
        var cartContainer = $('#cartItems');
        // Display cart items
        cartItems.forEach(function(item) {
            var cartItemHtml = '<div class="cart-item">' + item + ' <button class="deleteBtn">Delete</button></div>';
            cartContainer.append(cartItemHtml);
        });

        // Handle delete button click event
        cartContainer.on('click', '.deleteBtn', function() {
            var index = $(this).parent().index(); // Get index of the cart item
            cartItems.splice(index, 1); // Remove the item from the cartItems array
            localStorage.setItem('cart', JSON.stringify(cartItems)); // Update localStorage
            $(this).parent().remove(); // Remove the item from the DOM
        });
    }
});
