<?php include('database.php'); include('partials/headerc.php'); 
include('fpdf/fpdf.php'); include('insert/insert.php'); ?>
<?php

    
?>
<div style="text-align :center">
  <div class="container">
      
          <div class="row">
              <div class="col-md-4">
                  <br>
                  <br>
              
                  <form action="canchas.php" method="POST">
                          <div class="form-group">
                              <p style="color:blue;">Ingresa tu nombre<input type="text" name="name" class="form-control"
                              placeholder="Write your name" autofocus></p>
                              <p style="color:blue;">Razon de reserva<input type="text" name="reserv" class="form-control"
                              placeholder="Escriba aqui su razon" autofocus></p>
                              <p style="color:blue;">Ingresa tu correo<input type="text" name="correo" class="form-control"
                              placeholder="Write your mail" autofocus></p>
                              <p style="color:blue;">Comentario<textarea name="description" rows="2" class="form-control" 
                            placeholder="description"></textarea></p>

                              
                          </div>
                          <input class="btn btn-primary" type="submit" value="Submit">
                                        
                  </form>
              

              
          </div>

          
          <div class="row">
            <div class="col-md-8">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            </div>
          </div>
          <div class="cold-md-8">
          <br>
          <br>
          <ubi>
          <div class="card card-body" style="color:blue;">
          <table class="table-bordered">
                      <thead>
                      <tr>
                      <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;description&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Razon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fecha creacion &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                      
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $sql = 'SELECT * FROM reserva';
                 foreach ($conn->query($sql) as $row) {
                                
                 }
                 ?>
                  <td><?php echo $row['name'] ?></td>
                  <td><?php echo $row['reserv'] ?></td>
                  <td><?php echo $row['description'] ?></td>
                  <td><?php echo $row['created_at'] ?></td>
                                                          
            </table>
            </div>
              <br>
                 <div class="row">
                  
                  <div class="col">
                 
                 <form action="pdfu.php">
                   <button type="submit" class="btn btn-secondary" value="PDF">PDF</button>
                 </form>
                 
                 </div>
                 
                  <div class="col">
                 <form action="enviar-prueba.php">
                 <button type="submit" class="btn btn-secondary">Constancia en correo</button>
                 </form>
                 
                 </div>

          </div>
          
            
  </div>
  
</div>
<?php include('partials/footer.php'); ?>
