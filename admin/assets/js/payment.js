var cart = [];
var totalAmount = 0;

function addMeal(name, price, quantityId) {
    var quantity = document.getElementById(quantityId).value;
    cart.push({ name: name, price: price, quantity: quantity });
    updateCart();
}

function cancelMeal(name) {
    cart = cart.filter(item => item.name !== name);
    updateCart();
}

function updateCart() {
    var cartItems = document.getElementById('cart-items');
    var totalAmountElem = document.getElementById('totalAmount');
    cartItems.innerHTML = '';
    totalAmount = 0;

    cart.forEach(item => {
        var listItem = document.createElement('li');
        listItem.textContent = `${item.name} x ${item.quantity} - ₹${item.price * item.quantity}`;
        cartItems.appendChild(listItem);
        totalAmount += item.price * item.quantity;
    });

    totalAmountElem.textContent = `Total Amount: ₹${totalAmount}`;
    document.getElementById('meals').value = JSON.stringify(cart);
}

function toggleDropdown() {
    document.getElementById("dropdown").classList.toggle("show");
}

window.onclick = function (event) {
    if (!event.target.matches('.dropdown-checkboxes button')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}