document.addEventListener("DOMContentLoaded", function() {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function() {
            const article = this.closest('article');
            const gameName = article.querySelector('h3').textContent.trim();
            addToCart(gameName);
        });
    });

    function addToCart(gameName) {
        // Retrieve existing cart items from local storage
        let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];

        // Add the new item to the cart
        cartItems.push(gameName);

        // Store the updated cart items in local storage
        localStorage.setItem('cartItems', JSON.stringify(cartItems));

        // Redirect to the cart page
        window.location.href = 'cart.html';
    }
});
