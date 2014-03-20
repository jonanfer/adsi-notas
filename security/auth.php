<?php 
   if (!isset($_SESSION['userName'])|| $_SESSION['userRole'] != "Instructor")
    {
    ?>
       <script>;
          alert('El contenido no esta disponible... \nPor favor inicie sesion!');
          window.location.replace('./listar2.php');
       </script>;
<?php        
  }
 ?>