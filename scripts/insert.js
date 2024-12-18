const products = document.querySelectorAll(".product-card");
let sqlQueries = "";

products.forEach(product => {
    const id = product.getAttribute("data-product-id");
    const name = product.getAttribute("data-product-name");
    const price = product.getAttribute("data-price");
    const imgSrc = product.getAttribute("data-img-src");

    sqlQueries += `INSERT INTO products (id, name, price, img_src) VALUES ('${id}','${name}', ${price}, '${imgSrc}');\n`;
});

console.log(sqlQueries);