document.addEventListener("DOMContentLoaded", function () {
    const productCards = document.querySelectorAll(".product-card");
    const cartModal = document.getElementById("cartModal");
    const modalMessage = cartModal.querySelector(".modal-message");

    function showModal(message) {
        modalMessage.textContent = message;
        cartModal.style.display = "flex";
        
        setTimeout(() => {
            cartModal.style.display = "none";
        }, 1000); // Adjust the duration if needed
    }

    productCards.forEach(card => {
        card.addEventListener("click", function () {
            const productId = this.getAttribute("data-product-id"); 
            const productData = { product_id: productId };

            fetch("../src/add_to_cart.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(productData)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showModal("Товар добавлен в корзину!");
                } else {
                    showModal(data.message);
                }
            })
            .catch(error => {
                console.error("Ошибка при добавлении товара в корзину:", error);
                showModal("Произошла ошибка. Попробуйте еще раз.");
            });
        });
    });
});
