<main class="main">
  <div class="breadcrumbs">HOME / SHOP</div>
  <div class="products">
    <?php foreach ($params['products'] as $v): ?>
      <div class="product">
        <a href="product">
          <img class="product-img" src="<?php echo $params['imgDir'], $v['img']; ?>" alt="<?php echo $v['title']; ?>" />
        </a>
        <div class="product-text">
          <a class="product-link" href="product"><?php echo $v['title']; ?></a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</main>