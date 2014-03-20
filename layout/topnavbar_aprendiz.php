<?php 
 include '../bd/sesiones.php';
 $ns = new Sesiones();
 $ns->ingresar();
 $ns->seguridad();

 ?>
 <div class="ui horizontal icon divider">
         <i class="grid layout icon circular"></i>
      </div>

<img class="ui image" src="../dist/imgs/ad2.png">

<div class="ui inverted attached message">
      <div class="ui header center aligned">
          <h2 class="ui green header">Adsi - Notas</h2>
      </div>
      <div class="ui segment inverted center aligned">
          <p>La manera mas agil y facil de organizar tus notas.</p>
      </div>
    </div>

        <div class="ui horizontal icon divider">
         <i class="grid layout icon circular"></i>
      </div>

<div class="ui inverted menu">
           <div class="item">
             <b> Bienvenid@ : <?php echo $_SESSION['userName']; ?></b>
           </div>

           <div class="right menu">
             <!--<div class="purple item">
               <div class="ui icon input">
                 <input type="text" placeholder="Search...">
                 <i class="search black link icon"></i>
               </div>
             </div>-->
             <a href="../layout/cerrar.php" class="ui item">
             Cerrar Sesión
             </a>
           </div>
        </div>

         