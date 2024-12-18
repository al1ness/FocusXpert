document.addEventListener("DOMContentLoaded", () => {
    const select = document.querySelector(".sort-order");

    select.addEventListener("change", () => {
        const sortOrder = parseInt(select.value, 10);

        // Получение всех категорий
        const categories = document.querySelectorAll(".product-box");
        
        categories.forEach(category => {
            const productList = category.querySelectorAll(".product-card");
            const productArray = Array.from(productList);

            // Сортировка в зависимости от выбранного значения
            productArray.sort((a, b) => {
                const priceA = parseInt(a.dataset.price, 10);
                const priceB = parseInt(b.dataset.price, 10);

                switch (sortOrder) {
                    case 1: // Сначала новые
                        return b.dataset.productId - a.dataset.productId;
                    case 2: // Сначала старые
                        return a.dataset.productId - b.dataset.productId;
                    case 3: // Сначала дорогие
                        return priceB - priceA;
                    case 4: // Сначала дешевые
                        return priceA - priceB;
                    default:
                        return 0;
                }
            });

            // Очистка текущего списка и добавление элементов в отсортированном порядке
            const container = category.querySelector(".cameras__list, .gopro__list, .lenses__list, .accessories__list");
            container.innerHTML = ""; // Очистка контейнера
            productArray.forEach(product => container.appendChild(product)); // Вставка элементов
        });
    });
});
