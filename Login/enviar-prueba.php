<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include('phpmailer/Exception.php'); include('phpmailer/PHPMailer.php'); include('phpmailer/SMTP.php');include('database.php');


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'emiliosantiago134s5@gmail.com';                     // SMTP username
    $mail->Password   = '6652278Jogf';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $sql = 'SELECT * FROM reserva';
        foreach ($conn->query($sql) as $row) {
            $mail->setFrom('emiliosantiago134s5@gmail.com', 'ReservasCanchas.com');
            $mail->addAddress( $row['correo'] ); 
             
                                
         }
         
        // Add a recipient
    

   

    // Content
    $sqld = 'SELECT * FROM reserva';
        foreach ($conn->query($sqld) as $row) {
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Reservaciones.com';
            $mail->Body    = 'La reservacion ha sido un exito '.$row['name']."\n".'con una razon de '.$row['reserv'].
            "\n".'con una descripcion'."\n".$row['description']."\n".'hoy'."\n".$row['created_at'];
           
        }
    
    

    $mail->send();
    include('database.php'); include('partials/headerc.php'); include('fpdf/fpdf.php'); include('insert/insert.php');
    

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
<div style="text-align:center">
    <h1>Se ha enviado una notificacion a tu correo</h1>
      
    </div>
