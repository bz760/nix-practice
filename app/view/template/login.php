<main class="main">
  <div class="breadcrumbs">HOME / LOGIN</div>
  <div class="login-title">Login</div>
  <form class="login-form" action="auth" method="post">
    <input name="login" type="text" placeholder="Username" required>
    <input name="password" type="password" placeholder="Password" required>
    <div class="login-options">
      <label>
        <input name="remember" type="checkbox" checked="checked">Remember me
      </label>
    </div>
    <button class="submit" type="submit">LOGIN</button>
  </form>
</main>