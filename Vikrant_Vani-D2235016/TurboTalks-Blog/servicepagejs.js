let cart2 = [];
      const cartCount = document.querySelector('.cart-count');
      function addProduct(prodDetails){
        console.log(prodDetails);
        
         if(!cart2.find(e => e.name === prodDetails.name)) {
          cart2.push(prodDetails);
          cartCount.textContent=`(${cart2.length})`; //"(" + cart2.length +")"
          console.log(cart2);

          localStorage.setItem('cart2', JSON.stringify(cart2)); // save cart value (array of object) in a local storage
        }
      }
      window.onload=function addProduct(){ //calls on page load
        cart2 = [ ...JSON.parse(localStorage.getItem('cart2'))]; //get cart value from localstorage
        cartCount.textContent=`(${cart2.length})`;
     }