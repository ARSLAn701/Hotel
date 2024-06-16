 function toggleDropdown() {
            document.getElementById("dropdown").classList.toggle("show");
        }

        window.onclick = function(event) {
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

        const mealCheckboxes = document.querySelectorAll('.meal-checkbox');
        const cartItems = document.getElementById('cart-items');
        const totalAmount = document.getElementById('totalAmount');

        mealCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const mealName = this.getAttribute('data-name');
                const mealPrice = parseInt(this.getAttribute('data-price'));

                if (this.checked) {
                    addMealToCart(mealName, mealPrice);
                } else {
                    removeMealFromCart(mealName);
                }
                updateTotalAmount();
            });
        });

        function addMealToCart(name, price) {
            const li = document.createElement('li');
            li.setAttribute('data-name', name);
            li.setAttribute('data-price', price);
            li.textContent = `${name} - ₹${price}`;
            cartItems.appendChild(li);
        }

        function removeMealFromCart(name) {
            const items = cartItems.querySelectorAll('li');
            items.forEach(item => {
                if (item.getAttribute('data-name') === name) {
                    cartItems.removeChild(item);
                }
            });
        }

        function updateTotalAmount() {
            let total = 0;
            const items = cartItems.querySelectorAll('li');
            items.forEach(item => {
                total += parseInt(item.getAttribute('data-price'));
            });
            totalAmount.textContent = `Total Amount: ₹${total}`;
        }