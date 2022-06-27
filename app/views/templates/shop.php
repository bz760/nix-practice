<main class="main">
  <div class="breadcrumbs">HOME / SHOP</div>
  <div class="products">
    <?php foreach ($params['goods'] as $v): ?>
      <div class="product">
        <a href="product.php">
          <img class="product-img" src="<?php echo $params['imgDir'], $v['img']; ?>" alt="<?php echo $v['title']; ?>" />
        </a>
        <div class="product-text">
          <a class="product-link" href="product.php"><?php echo $v['title']; ?></a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</main>