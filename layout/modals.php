<?php 
 include 'bd/sesiones.php';
 $ns = new Sesiones();
 $ns->ingresar();
 if (isset($_SESSION['userRole'])) 
 {
   $ns->seguridad2();
 }

 ?>

<!-- Modal (Ingreso) -->
      <div class="ui modal" id="modal1">
           <i class="close icon"></i>
           <div class="header">Ingreso de Usuarios</div>
  
           <div class="content">
              <div class="ui small form segment">
                 <form action="" method="post" id="form1">
                    <div class="ui error form segment">
                      <div class="field">
                        <label>Usuario</label>
                        <input placeholder="Ingrese su Nickname" type="text" name="nick_usuario">
                      </div>
                      <div class="field">
                        <label>Contraseña</label>
                        <input type="password" placeholder="Ingrese su Contraseña" name="clave">
                      </div>
                    <input class="ui blue submit button" type="submit" value="Ingresar">
                    </div>
                 </form>
              </div>

              <div class="actions">
                 <div class="ui blue small submit button">Cerrar</div>
              </div>
            </div>
      </div>

     <?php 
 
     if ($_POST) 
     {
        $usuario = $_POST['nick_usuario'];
        $contra = $_POST['clave'];

        $lg = new Usuarios();
        $ini = $lg->login($usuario, $contra);

         if (mysql_num_rows($ini) > 0) 
         {
           while ($reg = mysql_fetch_array($ini))
            {
              echo $reg['nom_usuario'];
               $_SESSION['userName'] = $reg['nick_usuario'];
               $_SESSION['userRole'] = $reg['rol_usuario'];
               $_SESSION['documento'] = $reg['ide_usuario'];
            }
            if ($_SESSION['userRole'] == "Instructor") 
            {
               echo "<script>";
               echo "window.location.replace('instructor/listar.php')";
               echo "</script>";
            }
            else
            {
               if ($_SESSION['userRole'] == "Aprendiz") 
               {
                  echo "<script>";
                  //echo "alert('Usted es un aprendiz estamos en mantenimiento.');";
                  echo "window.location.replace('aprendiz/listar2.php')";
                  echo "</script>";
               }
            }
         }
     }

     ?>