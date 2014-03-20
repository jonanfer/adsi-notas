<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Adicionar Aprendiz</title>
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
             <h2>Adicionar Aprendiz</h2>
                 <form action="" method="post" enctype="multipart/form-data">
                      <div class="field">
                        <label>Documento</label>
                        <input placeholder="Ingrese Documento" type="text" name="ide_usuario">
                      </div>
                      <div class="field">
                        <label>Nombre</label>
                        <input placeholder="Ingrese Nombre" type="text" name="nom_usuario">
                      </div>
                      <div class="field">
                        <label>Apellido</label>
                        <input placeholder="Ingrese Apellido" type="text" name="ape_usuario">
                      </div>
                      <div class="field">
                        <label>Nickname</label>
                        <input placeholder="Ingrese Nickname" type="text" name="nick_usuario">
                      </div>
                      <div class="field">
                        <label>Imagen</label>
                        <input type="file" name="ima_usuario" accept="image/png, image/jpeg"/>
                      </div>
                      <div class="field">
                        <label>Edad</label>
                        <input type="text" placeholder="Ingrese su Edad" name="eda_usuario">
                      </div>
                      <div class="field">
                        <label>Correo</label>
                        <input placeholder="Ingrese Correo" type="text" name="cor_usuario">
                      </div>
                      <div class="field">
                        <label>Rol</label>
                        <input value="Aprendiz" type="text" name="rol_usuario" readonly="readonly">
                      </div>
                      <div class="field">
                        <label>Estado</label>
                        <select class="ui selection dropdown" placeholder="Ingrese Estado" type="text" name="est_usuario">
                           <option class="item" value="">Seleccione</option>
                           <option class="item" value="Activo">Activo</option>
                           <option class="item" value="Inactivo">Inactivo</option>
                        </select>
                      </div>
                      <div class="field">
                        <label>Contraseña</label>
                        <input readonly="readonly" type="password" value="123456" name="clave">
                      </div>
                    
                    <div class="ui buttons">
                        <a href="../instructor/listar.php" class="ui green button">Cancelar</a>
                        <div class="or"></div>
                        <input class="ui blue submit button" type="submit" value="Ingresar">
                    </div>
                 </form>
              </div>

              <div class="ui horizontal icon divider">
                 <i class="grid layout icon circular"></i>
              </div>
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

<?php
    include '../bd/bd.php';
	include '../bd/usuarios.php';
	

	if ($_POST) 
	{
    $ruta = "../dist/imgs/usuarios/".$_FILES['ima_usuario']['name'];
            move_uploaded_file($_FILES['ima_usuario']['tmp_name'], $ruta);

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

		$nu = new Usuarios();
		$nu->insertarUsuario($ide, $nom, $ape, $nick, $ima, $eda, $cor, $rol, $est, $cla);
	}
?>
</body>
</html>