<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificar Aprendiz</title>
	<link rel="stylesheet" href="../dist/css/semantic.min.css">
	<link rel="stylesheet" href="../dist/css/style.css">
</head>
<body>

<div class="content">
 <?php
     //include 'security/auth.php';
     include '../layout/topnavbar.php';
    ?>
        <div class="ui small form segment">
             <h2>Modificar Aprendiz</h2>
                 <form action="" method="post" enctype="multipart/form-data">
                 <?php 
	               include '../bd/bd.php';
	               include '../bd/usuarios.php';
	
	               $id = $_GET['id'];

	               $lu = new Usuarios();
	               $re = $lu->formularioUsuario($id);

	               while ($campo = mysql_fetch_array($re)) 
	               {
	             ?>
                      <div class="field">
                        <label>Documento</label>
                        <input placeholder="Ingrese Documento" type="text" name="ide_usuario"
                        value="<?php echo $campo['ide_usuario']; ?>" readonly="readonly">
                      </div>
                      <div class="field">
                        <label>Nombre</label>
                        <input placeholder="Ingrese Nombre" type="text" name="nom_usuario"
                        value="<?php echo $campo['nom_usuario']; ?>">
                      </div>
                      <div class="field">
                        <label>Apellido</label>
                        <input placeholder="Ingrese Apellido" type="text" name="ape_usuario"
                        value="<?php echo $campo['ape_usuario']; ?>">
                      </div>
                      <div class="field">
                        <label>Nickname</label>
                        <input placeholder="Ingrese Nickname" type="text" name="nick_usuario"
                        value="<?php echo $campo['nick_usuario']; ?>">
                      </div>
                      <div class="field">
                        <label>Imagen</label>
                        <div class="ui input">
                        <input type="file" name="ima_usuario" accept="image/png, image/jpeg"
                        value="<?php echo $campo['ima_usuario']; ?>">
                        </div>
                      </div>
                      <div class="field">
                        <label>Edad</label>
                        <input type="text" placeholder="Ingrese su Edad" name="eda_usuario"
                        value="<?php echo $campo['eda_usuario']; ?>">
                      </div>
                      <div class="field">
                        <label>Correo</label>
                        <input placeholder="Ingrese Correo" type="text" name="cor_usuario"
                        value="<?php echo $campo['cor_usuario']; ?>">
                      </div>
                      <div class="field">
                        <label>Rol</label>
                        <input placeholder="Ingrese Rol" type="text" name="rol_usuario"
                        value="<?php echo $campo['rol_usuario']; ?>" readonly="readonly">
                      </div>
                      <div class="field">
                        <label>Estado</label>
                        <select class="ui selection dropdown" type="text" name="est_usuario"
                        value="<?php echo $campo['est_usuario']; ?>">
                           <option value="">Seleccione</option>
                           <option value="Activo">Activo</option>
                           <option value="Inactivo">Inactivo</option>
                        </select>
                      </div>
                      <div class="field">
                        <label>Contraseña</label>
                        <input placeholder="Ingrese Clave" type="password" name="clave"
                        value="<?php echo $campo['clave']; ?>" readonly="readonly">
                        <input type="hidden" name="iorigen" value="<?php echo $campo['ima_usuario'];?>">
                      </div>
                    
                    <div class="ui buttons">
                        <a href="../instructor/listar.php" class="ui green button">Cancelar</a>
                        <div class="or"></div>
                        <input class="ui blue submit button" type="submit" value="Ingresar">
                    </div>
                    <?php
		             }
		             ?>
                 </form>
                 <?php 

		            if ($_POST) 
		            {
		            	  if (isset($_FILES['ima_usuario']['name'])) 
                  {
                    $ruta = "../dist/imgs/usuarios/".$_FILES['ima_usuario']['name'];
                    if (file_exists($_POST['iorigen'])) 
                    {
                      unlink($_POST['iorigen']);
                    }
                    
                    move_uploaded_file($_FILES['ima_usuario']['tmp_name'], $ruta);
                  }
                  else
                  {
                    $ruta = $_POST['iorigen'];
                  }

                  $ide = $_POST['ide_usuario'];
                  $nom = $_POST['nom_usuario'];
                  $ape = $_POST['ape_usuario'];
                  $nick = $_POST['nick_usuario'];
                  $ima = $ruta;
                  $eda = $_POST['eda_usuario'];
                  $cor = $_POST['cor_usuario'];
                  $rol = $_POST['rol_usuario'];
                  $est = $_POST['est_usuario'];
                  $cla = $_POST['clave'];
            
                  $mu = new Usuarios();
                  $mu->modificarUsuario($ide, $nom, $ape, $nick, $ima, $eda, $cor, $rol, $est, $cla);
            
		            	echo "<script>";
		            	echo "window.location.replace('../instructor/listar.php');";
		            	echo "</script>";
		            }
            
            
		            ?>
              </div>
              
              <div class="ui horizontal icon divider">
                 <i class="grid layout icon circular"></i>
              </div>

              <div class="ui inverted page grid">
    <div class="row">
      <div class="column">
        <h2 class="center aligned ui green header">Contactanos</h2>
      </div>
    </div>
    <div class="center three column aligned row">
      <div class="column">
        <div class="ui text shape">
              <i class="huge circular twitter icon"></i>
        </div>
      </div>
      <div class="column">
        <div class="ui text shape">
              <i class="huge circular github icon"></i>
        </div>
      </div>
      <div class="column">
        <div class="ui text shape">
              <i class="huge circular facebook icon"></i>        
        </div>
      </div>
    </div>
  </div>

     <div class="ui horizontal icon divider">
         <i class="grid layout icon circular"></i>
      </div>
          </div>	
	
</body>
</html>