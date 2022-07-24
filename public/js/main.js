const loadProducts = async (page) => {
    const response = await fetch('http://test2.loc/getProducts', {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
        }
    });

    let json = await response.json();
    let container;
    let getHtml;
    let html;

    if (page === 'shop') {
        container = document.getElementsByClassName('products')[0];

        getHtml = (json) =>
            `<div class="product">
              <a href="product">
                <img class="product-img" src="img/middle/${json.img}" alt="${json.name}">
              </a>
              <div class="product-text">
                <a class="product-link" href="product">
                  ${json.name}
                  ${json.updated_at}
                </a>
              </div>
            </div>`;

    } else if (page === 'cart') {
        container = document.querySelector('.cart-table > tbody');

        getHtml = (json) =>
            `<tr>
              <td class="product-thumbnail">
                <a href="product">
                  <img src="img/small/${json.img}" alt="${json.name}">
                </a>
              </td>
              <td>
                <a href="product">${json.name}</a>
              </td>
              <td class="product-price">$${json.price}</td>
              <td class="product-qty">
                <div class="counter">
                  <div class="counter-btn">-</div>
                  <input class="counter-input" name="counter-1" type="text" value="2">
                  <div class="counter-btn">+</div>
                </div>
              </td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Remove</a>
              </td>
            </tr>`;
    }

    for (let i = 0; i < json.length; i++) {
        html += getHtml(json[i]);
    }

    container.innerHTML = html;
};

let page = window.location.pathname.split('/').pop();
const pages = ['shop', 'cart'];

if (pages.indexOf(page) !== -1) {
    loadProducts(page);
}