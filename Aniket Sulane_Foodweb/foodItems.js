document.querySelectorAll('.add-to-cart').forEach(function(button) {
    button.addEventListener('click', function() {
        const foodItem = this.parentElement;
        const foodName = foodItem.querySelector('h3').textContent;
        const foodPrice = parseInt(foodItem.querySelector('p').textContent.replace('Price: ₹', '')); // Parse price as integer
        const foodImage = foodItem.querySelector('img').src;
        const quantity = parseInt(foodItem.querySelector('input[type="number"]').value);

        addToCart(foodName, foodPrice, foodImage, quantity);
    });
});

function addToCart(name, price, image, quantity) {
    let cartItems = JSON.parse(sessionStorage.getItem('cartItems')) || [];

    const existingItem = cartItems.find(item => item.name === name);

    if (existingItem) {
        existingItem.quantity += quantity;
    } else {
        cartItems.push({ name, price, image, quantity });
    }

    sessionStorage.setItem('cartItems', JSON.stringify(cartItems));

    console.log('Added to cart:', { name, price, image, quantity });
}
