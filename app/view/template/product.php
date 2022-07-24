<main class="main">
  <div class="breadcrumbs">HOME / PRODUCT</div>
  <div class="product-details">
    <div class="product-details-img">
      <img src="<?php echo $p['imgDir'], $p['product']->img; ?>" alt="<?php echo $p['product']->name; ?>">
    </div>
    <div class="product-details-text">
      <h2 class="product-details-title"><?php echo $p['product']->name; ?></h2>
      <p class="product-details-desc">
        <?php echo $p['product']->description; ?>
      </p>
      <ul>
        <li class="product-details-item">Weight: <?php echo $p['product']->weight; ?> kg</li>
        <li class="product-details-item">Dimensions: <?php echo $p['product']->dimensions; ?> cm</li>
        <li class="product-details-item">Price: $<?php echo $p['product']->price; ?></li>
      </ul>
    </div>
  </div>
</main>