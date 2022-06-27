<main class="main">
  <div class="breadcrumbs">HOME</div>
  <h1 class="title"><span class="bold-title">Fashion & furniture</span> store</h1>
  <div class="home-images">
    <?php foreach ($params['images'] as $v): ?>
      <img src="<?php echo $params['imgDir'], $v['img']; ?>" alt="<?php echo $v['title']; ?>" />
    <?php endforeach; ?>
  </div>
</main>