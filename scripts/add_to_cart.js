document.addEventListener("DOMContentLoaded", function () {
    const cartTableBody = document.getElementById("cart-items");
    const cartTotal = document.getElementById("cart-total");
    const confirmClearCartModal = document.getElementById("confirmClearCartModal");
    const confirmClearCartYes = document.getElementById("confirmClearCartYes");
    const confirmClearCartNo = document.getElementById("confirmClearCartNo");

    function showConfirmModal() {
        if (confirmClearCartModal) {
            confirmClearCartModal.style.display = "flex";
        }
    }

    function hideConfirmModal() {
        if (confirmClearCartModal) {
            confirmClearCartModal.style.display = "none";
        }
    }

    function updateCartItemQuantity(productId, quantity) {
        fetch("/src/add_to_cart.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ product_id: productId, quantity: quantity })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    fetchCartItems(); 
                } else {
                    console.error(data.message || "Ошибка обновления количества товара.");
                }
            })
            .catch(error => console.error("Ошибка:", error));
    }

    function updateCartTotalAmount(items) {
        let totalAmount = 0;
        items.forEach(item => {
            const itemTotal = item.price * item.quantity;
            totalAmount += itemTotal;
        });
        if (cartTotal) {
            cartTotal.textContent = `${new Intl.NumberFormat("ru").format(totalAmount)} ₽`;
        }
    }

    function renderCartItems(items) {
        if (cartTableBody) cartTableBody.innerHTML = ""; 
        let totalAmount = 0;
    
        items.forEach(item => {
            const itemTotal = item.price * item.quantity;
            totalAmount += itemTotal;
    
            const row = document.createElement("div");
            row.className = "product_card";
            row.setAttribute("data-id", item.id);
            row.innerHTML = `
                <div class="image">
                    <img src="${item.img_src}" alt="${item.name}">
                </div>
                <div class="data">
                    <div class="name">${item.name}</div>
                    <div class="qty">
                        <button data-action="sub" data-id="${item.id}">-</button>
                        <input type="number" value="${item.quantity}" data-id="${item.id}" min="1">
                        <button data-action="add" data-id="${item.id}">+</button>
                    </div>
                    <div class="price">${new Intl.NumberFormat("ru").format(item.price)} ₽</div>
                    <div class="total">${new Intl.NumberFormat("ru").format(itemTotal)} ₽</div>
                </div>
                <div class="actions">
                    <button class="delete-btn" data-product-id="${item.id}">Удалить</button>
                </div>
            `;
            cartTableBody.appendChild(row);
        });
    
        if (cartTotal) {
            cartTotal.textContent = `${new Intl.NumberFormat("ru").format(totalAmount)} ₽`;
        }
    
        document.querySelectorAll(".product_card .data .qty button").forEach(button => {
            button.addEventListener("click", function () {
                const productId = +this.dataset.id;
                const action = this.dataset.action;
                const input = this.closest(".qty").querySelector("input");
        
                let quantity = +input.value;
        
                if (action === "add") {
                    quantity += 1;
                } else if (action === "sub" && quantity > 1) {
                    quantity -= 1;
                }
        
                input.value = quantity;
        
                const price = +this.closest(".product_card").querySelector(".price").textContent.replace(/\D/g, '');
                const itemTotal = price * quantity;
                this.closest(".product_card").querySelector(".total").textContent = new Intl.NumberFormat("ru").format(itemTotal) + " ₽";
        
                updateCartItemQuantity(productId, quantity); 
            });
        });

        document.querySelectorAll(".product_card .data .qty input").forEach(input => {
            input.addEventListener("change", function () {
                const productId = +this.dataset.id;
                let quantity = +this.value;
                const priceElement = this.closest(".product_card").querySelector(".price");
                const totalElement = this.closest(".product_card").querySelector(".total");
        
                if (isNaN(quantity) || quantity <= 0) {
                    quantity = 1;
                }
        
                this.value = quantity;
        
                const price = +priceElement.textContent.replace(/\D/g, '');
                const itemTotal = price * quantity;
                totalElement.textContent = new Intl.NumberFormat("ru").format(itemTotal) + " ₽";
                updateCartItemQuantity(productId, quantity); 
                fetchCartItems(); 
            });
        });
    
        document.querySelectorAll(".delete-btn").forEach(button => {
            button.addEventListener("click", function () {
                const productId = this.dataset.productId;
                deleteCartItem(productId);
            });
        });

        updateCartTotalAmount(items); 
    }
    
    function deleteCartItem(productId) {
        fetch("/src/delete_cart_item.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ product_id: productId })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    fetchCartItems();
                } else {
                    console.error("Ошибка при удалении товара из корзины.");
                }
            })
            .catch(error => {
                console.error("Ошибка:", error);
            });
    }

    function fetchCartItems() {
        fetch("/src/get_cart_items.php")
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    renderCartItems(data.items);
                    updateCartTotalAmount(data.items);  
                } else {
                    if (cartTableBody) {
                        cartTableBody.innerHTML = "<tr><td colspan='6'>Корзина пуста или вы не авторизованы.</td></tr>";
                    }
                    if (cartTotal) {
                        cartTotal.textContent = "0 ₽";
                    }
                }
            });
    }

    if (confirmClearCartYes) {
        confirmClearCartYes.addEventListener("click", function () {
            hideConfirmModal();
            fetch("/src/clear_cart.php", { method: "POST" })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        cartTableBody.innerHTML = "";
                        cartTotal.textContent = "0 ₽";
                    } else {
                        console.error("Ошибка при очистке корзины.");
                    }
                })
                .catch(error => console.error("Ошибка:", error));
        });
    }

    if (confirmClearCartNo) {
        confirmClearCartNo.addEventListener("click", hideConfirmModal);
    }

    const cartClearBtn = document.querySelector(".cart__clear-btn");
    if (cartClearBtn) {
        cartClearBtn.addEventListener("click", showConfirmModal);
    }

    fetchCartItems();
});
