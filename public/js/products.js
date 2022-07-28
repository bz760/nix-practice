const loadProducts = async () => {
    const response = await fetch('http://test2.loc/getProducts', {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json'
        }
    });

    const json = await response.json();
    const container = document.getElementById('products');

    for (let k in json) {
        container.innerHTML +=
            `<div class="product">
              <a href="product">
                <img class="product-img" src="img/middle/${json[k].img}" alt="${json[k].name}">
              </a>
              <div class="product-text">
                <a class="product-link" href="product">${json[k].name}</a>
              </div>
            </div>`;
    }
};

loadProducts();