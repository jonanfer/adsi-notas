<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consultar Instructor</title>
	<link rel="stylesheet" href="../dist/css/semantic.min.css">
	<link rel="stylesheet" href="../dist/css/style.css">
</head>
<body>
		<div class="content">
	    <?php
     //include 'security/auth.php';
     include '../layout/topnavbar.php';
    ?>
		<table class="ui purple table segment">
				<tr class='ui purple table segment'>
					<td colspan="2">
						<h2>Consulta de Instructor</h2>
					</td>
				</tr>
				<?php 
					$id = $_GET['id'];
                    include '../bd/bd.php';
					include '../bd/usuarios.php';
			
					$cu = new Usuarios();
					$re = $cu->consultarUsuario($id);

					while ($campo = mysql_fetch_array($re)) 
					{
				?>
				<tr class='ui purple table segment'>
					<td><b>Documento:</b></td> 
					<td><?php echo $campo['ide_usuario'];?></td>
				</tr>
				<tr class='ui purple table segment'>
					<td><b>Nombre:</b></td> 
					<td><?php echo $campo['nom_usuario'];?></td>
				</tr>
				<tr class='ui purple table segment'>
					<td><b>Apellido:</b></td> 
					<td><?php echo $campo['ape_usuario'];?></td>
				</tr>
				<tr class='ui purple table segment'>
					<td><b>Nickname:</b></td> 
					<td><?php echo $campo['nick_usuario'];?></td>
				</tr>
				<tr class='ui purple table segment'>
					<td><b>Imagen:</b></td> 
					<td>
					   <img class="rounded ui small image" src="<?php echo $campo['ima_usuario'];?>">
					</td>
				</tr>
				<tr class='ui purple table segment'>
					<td><b>Edad:</b></td> 
					<td><?php echo $campo['eda_usuario'];?></td>
				</tr>
				<tr class='ui purple table segment'>
					<td><b>Correo:</b></td>
					<td><?php echo $campo['cor_usuario'];?></td>
				</tr>
				<tr class='ui purple table segment'>
					<td><b>Rol:</b></td>
					<td><?php echo $campo['rol_usuario'];?></td>
				</tr>
				<tr class='ui purple table segment'>
					<td><b>Estado:</b></td>
					<td><?php echo $campo['est_usuario'];?></td>
				</tr>
				<tr class='ui purple table segment'>
					<td><b>Contraseña:</b></td>
					<td><?php echo $campo['clave'];?></td>
				</tr>
				<?php 
					}
				 ?>
				<tr class='ui purple table segment'>
					<td colspan="2">
						<a href="listarInstructor.php" class=" mini ui green button">Atras</a>
					</td>
				</tr>
			</table>

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