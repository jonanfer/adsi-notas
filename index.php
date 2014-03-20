<?php 
    //--------------------------------   
    // INCLUIMOS EL ENCABEZADO 
       include "layout/header.php";
    //--------------------------------
       
 
    //--------------------------------
    // CONEXION BASE DE DATOS
       require "bd/bd.php";
       //require "bd/login.php";
       require "bd/usuarios.php";
       //require "bd/closebd.php";*/
    //--------------------------------


    //--------------------------------
    // INCLUIMOS EL TOPNAVBAR
      // include "layout/topnavbar.php";
    //--------------------------------


    //--------------------------------
    // INCLUIMOS EL CAROUSEL
     //  include "layout/carousel.php";
    //--------------------------------


    //--------------------------------
    // INCLUIMOS EL CONTENIDO
       include "layout/content.php";
       include "layout/modals.php";
    //--------------------------------


    //--------------------------------
    // INCLUIMOS EL FOOTER
       include "layout/footer.php";
    //--------------------------------
 ?>