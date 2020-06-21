
<?php
    session_start();

    include('database.php');

    if (isset($_SESSION['user_id'])) {
        $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
        $records->bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
    
        $user = null;
    
        if (count($results) > 0) {
          $user = $results;
        }
      }
?>
<?php include('partials/header.php')?>
<?php if(!empty($user)): ?>
  <div style="text-align :center">
        <br> Welcome. <?= $user['email']; ?>
        <br>
        <script language="javascript">
            alert('You are Successfully Logged In');
        </script>

        <br>
        
        To disconnect here
        <a href="logout.php">
          Logout
        </a>
        <br>
        <br>
        <button type="button" class="btn btn-light"><a href="Inicio.php">Continuar</a></button>
      <?php else: ?>


      <h1>Please login or signup</h1>
      <div style="text-align :center">
      <button type="button" class="btn btn-light"><a href="login.php">Login</a></button>
      Or
      <button type="button" class="btn btn-light"><a href="signup.php">SignUp</a></button>
        
      </div>  

   </div>
<?php endif; ?>
<!-- bootstrap-->

<?php include('partials/footer.php'); ?>
