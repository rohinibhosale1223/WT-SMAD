document.addEventListener('DOMContentLoaded', function() {
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    const cartCount = document.getElementById('cart-count');
    const cartItemsList = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
    const viewCartButton = document.getElementById('view-cart');
    const cartSidebar = document.getElementById('cart-sidebar');
  
    let cartCountValue = 0;
    let cartItems = {}; 
  
    addToCartButtons.forEach(button => {
      button.addEventListener('click', function() {
        const productName = this.dataset.name;
        const productPrice = parseFloat(this.dataset.price);
  
        if (cartItems[productName]) {
          cartItems[productName].quantity++;
        } else {
          cartItems[productName] = { price: productPrice, quantity: 1 };
          cartCountValue++; // Increment cartCountValue when a new item is added
        }
  
        cartCount.textContent = cartCountValue;
        updateCartSidebar();
      });
    });
  
    function updateCartSidebar() {
      cartItemsList.innerHTML = ''; 
  
      let total = 0;
  
      for (const itemName in cartItems) {
        const item = cartItems[itemName];
        const cartItem = document.createElement('li');
        cartItem.textContent = `${itemName} x ${item.quantity} - $${item.price * item.quantity}`; // Corrected template literal
        cartItemsList.appendChild(cartItem);
  
        total += item.price * item.quantity;
      }
  
      cartTotal.textContent = `Total: $${total.toFixed(2)}`; // Corrected template literal
    }
  
    viewCartButton.addEventListener('click', function() {
      cartSidebar.style.display = 'block';
    });
  
    window.addEventListener('click', function(e) {
      if (e.target !== cartSidebar && !cartSidebar.contains(e.target) && e.target !== viewCartButton) {
        cartSidebar.style.display = 'none';
      }
    });
});
