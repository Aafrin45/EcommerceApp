let cart = new Cart();

function addToCart(productId) {
    // Assume product details are fetched from the server based on productId
    let product = new Product(productId, `Product ${productId}`, productId * 10);
    cart.addToCart(product);
    updateCartView();
}

function updateCartView() {
    let cartElement = document.getElementById('cart');
    cartElement.innerHTML = '';

    cart.getProducts().forEach(product => {
        cartElement.innerHTML += `<li>${product.getName()} - $${product.getPrice()}</li>`;
    });
}

function calculateTotal() {
    let total = cart.calculateTotal();
    alert(`Total Bill: $${total}`);
}
