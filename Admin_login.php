    <link rel="stylesheet" href="Admin.css">
<div class="login">
  <h1>Login </h1>
  <form method="post" action="Valid_admin.php">
    <p><input type="text" name="username" value="" placeholder="Username "></p>
    <p><input type="password" name="password" value="" placeholder="Password"></p>
    <?php
            if(isset($_GET['msg']))
                echo $_GET['msg'];
    ?> 
    <p class="remember_me">
      <label>
        <input type="checkbox" name="remember_me" id="remember_me">
        Remember me on this computer
      </label>
    </p>
    
    <p class="submit"><input type="submit" name="commit" value="Login"></p>
  </form>
</div>

<div class="login-help">
  <p>Forgot your password? <a href="#">Click here to reset it</a>.</p>
</div>



