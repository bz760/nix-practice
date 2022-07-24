<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <title>Main page</title>
  <link type="text/css" rel="stylesheet" href="css/style.css">
  <script defer type="text/javascript" src="js/main.js"></script>
</head>
<body>
  <div class="wrapper">
    <header class="header">
      <a class="logo" href="/">
        <img class="logo-img" src="img/icon/logo.png" alt="LOGO">
      </a>
      <nav class="nav">
        <ul class="nav-list">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="shop">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart">Cart</a>
          </li>
          <li class="nav-item">
            <?php if ($auth->isLogged()): ?>
            <a class="nav-link" href="logout">Logout</a>
            <?php else: ?>
            <a class="nav-link" href="login">Login</a>
            <?php endif; ?>
          </li>
        </ul>
      </nav>
    </header>
