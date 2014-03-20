<?php 
include '../bd/sesiones.php';
$cs = new Sesiones();
$cs->ingresar();
if (isset($_SESSION['userRole'])) 
 {
   $cs->seguridad2();
 }
$cs->cerrar();
 ?>