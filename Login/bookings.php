<?php include('database.php'); include('partials/headerc.php'); include('insert/insert.php');


 ?>
 <body background="https://ramenparados.com/wp-content/uploads/2020/02/HonzukiGekio002-300x411.jpg">
 <div class="container">
    <div style="text-align :center">
      <div class="row">
                <div class="col">
                <form action="bookings.php" method="POST">
                    <br>
                    <p style="color:blue;">Ingrese los datos de su equipo</p>
                    
                    <input name="team" type="text" placeholder="Enter your name team">
                    <input name="miembros" type="text" placeholder="Enter the number of people">
                                       
                    <input name="category" type="text" placeholder="Enter your team category">
                    
                    <p style="color:black;">Aficionados/ Profesionales / Novatos</p>
                    <input name="lider" type="text" placeholder="ingrese el nombre del lider">
                    <input class="btn btn-primary" type="submit" value="Guardar">   
                                    

                        
                </form>
                <input class="btn btn-primary"type="submit" value="Siguiente" onclick = "location='equipamiento.php'"/>
                </div>
                
                
            
            
        </div>
    </div>    
 </div>

 
 


</body>
</html>