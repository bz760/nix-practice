<main class="main">
  <div class="breadcrumbs">HOME / PRODUCT</div>
  <div class="product-details">
    <div class="product-details-img">
      <img src="<?php echo $params['imgDir'], $params['product']['img']; ?>" alt="<?php echo $params['product']['title']; ?>" />
    </div>
    <div class="product-details-text">
      <h2 class="product-details-title"><?php echo $params['product']['title']; ?></h2>
      <p class="product-details-desc">
        <?php echo $params['product']['description']; ?>
      </p>
      <ul>
        <li class="product-details-item">Weight: <?php echo $params['product']['weight']; ?> kg</li>
        <li class="product-details-item">Dimensions: <?php echo $params['product']['dimensions']; ?> cm</li>
        <li class="product-details-item">Price: $<?php echo $params['product']['price']; ?></li>
      </ul>
    </div>
  </div>
</main>