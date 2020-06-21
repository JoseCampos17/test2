<?php include('database.php'); include('insert/insert.php'); include('partials/header.php')?>
<?php if(!empty($message)):?>
  
  <div class="alert alert-success" role="alert">
    <p style="text-align:center"><?= $message ?></p>
</div>
    
<?php endif;?>

    <h1>SignUp</h1>
    <div style="text-align:center">
    <button type="button" class="btn btn-light"><a href="login.php">Login</a></button>
      
    </div>
    <div class="container">
      <div class="row">
        <div class="cold-md-4">
      <form action="Signup.php" method="POST">
          
              <input name="email" type="text" placeholder="Enter your email">
              <input name="password" type="password" placeholder="Enter your Password">
              <input name="confirm_password" type="password" placeholder="Confirm Password">
              <input class="btn btn-primary" type="submit" value="Submit">
            </div>
          </div>
      </form>
    </div>

<?php include('partials/footer.php'); ?>