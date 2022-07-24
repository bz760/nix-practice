<main class="main">
  <div class="breadcrumbs">HOME / CART</div>
  <div class="cart">
    <div class="cart-title">Your cart items</div>
    <form class="cart-form clearfix" action="#" method="post">
      <table class="cart-table">
        <thead>
          <tr>
            <th>IMAGE</th>
            <th>PRODUCT NAME</th>
            <th>UNTIL PRICE</th>
            <th>QTY</th>
            <th>ACTION</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($p['cart'] as $v): ?>
          <tr>
            <td class="product-thumbnail">
              <a href="product">
                <img src="<?php echo $p['imgDir'], $v->img; ?>" alt="<?php echo $v->name; ?>">
              </a>
            </td>
            <td>
              <a href="product"><?php echo $v->name; ?></a>
            </td>
            <td class="product-price">$<?php echo $v->price; ?></td>
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
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <button class="submit" type="submit">PROCEED TO CHECKOUT</button>
    </form>
  </div>
</main>