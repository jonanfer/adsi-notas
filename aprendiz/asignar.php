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
     include '../bd/bd.php';
	 include '../bd/usuarios.php';
	 include '../bd/materias.php';
	 include '../bd/notas.php';
	if (isset($_GET)) {
       $id = $_GET['id'];
     }
?>
<div class="marco bgcontainer">

<form action="" method="post" class="registerSubject">
		<table class="ui inverted table segment" id="mar">
			<thead>
				<tr>
			    	<th colspan="2">
			    		<h2>Asignar Materia</h2>
			    	</th>
			    </tr>
			    <tr>
                   <td colspan="2">
                     <a href="../instructor/listar.php" class="tiny ui blue button">
                     <i class="home icon"></i> Volver</a>
                   </td>
                </tr>
			</thead>
		    <tbody>
			    <?php
					$lus = new Usuarios();
					$lus->verUsuario($id);
				?>
				<tr>
					<td colspan="2">
						<div class="ui form segment segment" id="mar">
						  	<div class="field">
						    	<label>Materia</label>
							    <div class="ui left labeled icon input">
							      	<select class="ui input" name="ide_materia" id="">
							      		<option value="">- Seleccionar -</option>
							      		<?php
											$lma = new Materias();
											$lma->asignarListaMateria()
							      		?>
							      	</select>
						    	</div>
						  	</div>
					</td>
				</tr>
		    </tbody>
		</table>
		
			  	
			<button type="submit" class="tiny ui blue submit button">
			   <i class="add user basic icon"></i>
			   </i> Asignar
			</button>
            <a href="../instructor/listar.php" class="tiny ui red button">Cancelar</a>
		
	</form>

	</div>

	<?php

if ($_POST)
{
	$id = $_GET['id'];
	$ide_materia = $_POST['ide_materia'];

	$an = new Notas();
	$an->asignarMateria($id, $ide_materia );

	echo "<script>";
	echo "window.location.replace('../materias/listarMateria.php')";
	echo "</script>";
}
?>
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
