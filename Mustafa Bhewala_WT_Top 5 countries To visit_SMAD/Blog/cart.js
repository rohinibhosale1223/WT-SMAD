document.addEventListener('DOMContentLoaded', function() {
    // Load cart items from localStorage
    loadCartItems();

    // Add event listener to the form
    document.getElementById('addToCartForm').addEventListener('submit', function(event) {
        event.preventDefault();
        addToCart();
    });
});

function addToCart() {
    const productName = document.getElementById('productName').value;
    const productPrice = document.getElementById('productPrice').value;
    const productImage = 'https://cyberbackpack.com/cdn/shop/products/lightweight-anti-theft-laptop-bags-for-ultimate-security-cyberbackpack-backpack-cyberbrands-218193_800x.jpg?v=1698004916';
 // Get the product image URL

    if (productName && productPrice) {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        let existingItemIndex = cart.findIndex(item => item.name === productName);
        
        if (existingItemIndex !== -1) {
            // If the product already exists in the cart, update its quantity
            cart[existingItemIndex].quantity += 1;
        } else {
            // If the product is not in the cart, add it
            cart.push({ name: productName, price: parseFloat(productPrice), quantity: 1, image: productImage });
        }

        localStorage.setItem('cart', JSON.stringify(cart));
        loadCartItems(); // Refresh the cart display
    }
}

function loadCartItems() {
    const cartItemsDiv = document.getElementById('cartItems');
    cartItemsDiv.innerHTML = ''; // Clear previous items

    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    let totalItems = 0; // Initialize total items counter
    let totalPrice = 0; // Initialize total price counter

    cart.forEach(item => {
        const itemDiv = document.createElement('div');
        itemDiv.classList.add('cart-item');
        itemDiv.innerHTML = `
            <img src="${item.image}" alt="${item.name}">
            <div class="cart-item-details">
                <p>${item.name} - $${item.price.toFixed(2)}</p>
                <p>Quantity: ${item.quantity}</p>
            </div>
            <button onclick="removeFromCart('${item.name}')">Remove</button>
        `;
        cartItemsDiv.appendChild(itemDiv);
        
        // Increment total items counter for each item in the cart
        totalItems += item.quantity;
        totalPrice += item.price * item.quantity;
    });

    // Display the total number of items and total price in the cart
    const totalItemsElement = document.createElement('p');
    totalItemsElement.textContent = `Total Items: ${totalItems}`;
    cartItemsDiv.appendChild(totalItemsElement);

    const totalPriceElement = document.createElement('p');
    totalPriceElement.textContent = `Total Price: $${totalPrice.toFixed(2)}`;
    cartItemsDiv.appendChild(totalPriceElement);
}

function removeFromCart(productName) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart = cart.filter(item => item.name !== productName);
    localStorage.setItem('cart', JSON.stringify(cart));
    loadCartItems(); // Refresh the cart display
}
