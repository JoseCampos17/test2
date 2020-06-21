<?php include('database.php'); include('partials/headerc.php'); 
include('fpdf/fpdf.php'); include('insert/insert.php'); ?>
<?php

    
?>
<body background="https://ramenparados.com/wp-content/uploads/2020/02/HonzukiGekio002-300x411.jpg">
<div style="text-align :center">
  <div class="container">
      
          <div class="row">
              <div class="col-12"></div>
              <div class="col-md-4">
                  <br>
               
                  <br>
                  <form action="equipamiento.php" method="POST">
              <div class="card card-body">
                  
                          <div class="form-group">
                              <p>camisetas<input type="int" name="camisetas" class="form-control"
                              placeholder="Cantidad de jugadores" autofocus></p>
                              <p>proctetores<input type="int" name="protectores" class="form-control"
                              placeholder="cantidad de jugadores" autofocus></p>
                              <p>rodilleras<input type="int" name="rodilleras" class="form-control"
                              placeholder="cantidad de jugadores" autofocus></p>
                              <p>zapatos<input type="int" name="zapatos" class="form-control"
                              placeholder="cantidad de jugadores" autofocus></p>
                              
                              

                              
                          </div>
                          <input class="btn btn-primary" type="submit" value="Guardar">
                          
                          
                                        
                  

              </div>

              </form>
              <input class="btn btn-primary"type="submit" value="Siguiente" onclick = "location='canchas.php'"/>
              


              
          </div>   
          
         
                  