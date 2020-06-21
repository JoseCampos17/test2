
    
    <?php

    session_start();
    if(isset($_SESSION['user_id'])){
    }
    include('partials/header.php'); include('database.php');include('insert/insert.php')
    ?>

    <H1> Login </H1>
    
    <div style="text-align :center">
    

    <?php if (!empty($message)): ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong><p><?= $message?> </p></strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
      
    <?php endif ?>
    </div>
    <div style="text-align :center">
      <div class="container">
        <div class="row">
          <div class="cold-md-4">
            
            <form action="login.php" method="POST">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="text" placeholder="Enter your email">
              </div>
              <div class="form-group">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                <input name="password" type="password" placeholder="Enter your Password">
              </div>
              
              <input class="btn btn-primary" type="submit" value="Submit">
            </form>
          </div> 
        </div>
      </div>
      <button type="button" class="btn btn-light"><a href="signup.php">SignUp</a></button>
   </div>
      
      </div>
    
    </div>
<?php include('partials/footer.php'); ?>