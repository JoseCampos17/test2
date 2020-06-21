
<?php
include('database.php');


$message = '';

if (!empty($_POST['camisetas']) && !empty($_POST['protectores']) && 
!empty($_POST['rodilleras']) && !empty($_POST['zapatos'])) {
    $sql = "INSERT INTO equipamiento (camisetas, protectores, rodilleras, zapatos) VALUES 
    (:camisetas, :protectores, :rodilleras, :zapatos)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':camisetas', $_POST['camisetas']);
    $stmt ->bindParam(':protectores',$_POST['protectores']);
    $stmt ->bindParam(':rodilleras',$_POST['rodilleras']);
    $stmt ->bindParam(':zapatos',$_POST['zapatos']);
    
    
 
    if ($stmt->execute()) {
        $message = 'Saved';
      } else {
        $message = 'Error in your reserv';
      }
    }

$message = '';

if (!empty($_POST['name']) && !empty($_POST['reserv']) && 
!empty($_POST['description']) && !empty($_POST['correo'])) {
    $sql = "INSERT INTO reserva (name, reserv, description, correo) VALUES 
    (:name, :reserv, :description, :correo)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $_POST['name']);
    $stmt ->bindParam(':reserv',$_POST['reserv']);
    $stmt ->bindParam(':description',$_POST['description']);
    $stmt ->bindParam(':correo',$_POST['correo']);
    
    
 
    if ($stmt->execute()) {
        $message = 'Saved';
      } else {
        $message = 'Error in your reserv';
      }
    }


    $message = '';

    if (!empty($_POST['lider']) && !empty($_POST['miembros']) && 
    !empty($_POST['team']) && !empty($_POST['category'])) {
        $sql = "INSERT INTO teams (lider, miembros, team, category) VALUES 
        (:lider, :miembros, :team, :category)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':lider', $_POST['lider']);
        $stmt ->bindParam('miembros',$_POST['miembros']);
        $stmt ->bindParam(':team',$_POST['team']);
        $stmt ->bindParam(':category',$_POST['category']);
        
     
        if ($stmt->execute()) {
            $message = 'Successfully created new user';
          } else {
            $message = 'Sorry there must have been an issue creating your account';
          }
        }

        if(!empty($_POST['email']) && !empty($_POST['password'])){
          $records =$conn->prepare('SELECT id, email, password FROM users
          WHERE email = :email');
          $records->bindParam(':email', $_POST['email']);
          $records->execute();
          $results = $records->fetch(PDO::FETCH_ASSOC);
  
          $message = '';
  
          if (count($results) > 0  && password_verify($_POST['password'], $results['password'])) {
             $_SESSION['user_id'] = $results['id'];
             header("Location: /Login");    
          } else {
              $message = 'Sorry, those credentials do no match';
          }
      }




?>