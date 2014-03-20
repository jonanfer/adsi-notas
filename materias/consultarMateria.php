<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consultar Materias</title>
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
						<h2>Consulta de Materias</h2>
					</td>
				</tr>
				<?php 
					$id = $_GET['id'];
                    include '../bd/bd.php';
					include '../bd/materias.php';
			
					$cu = new Materias();
					$re = $cu->consultarMateria($id);

					while ($campo = mysql_fetch_array($re)) 
					{
				?>
				<tr class='ui purple table segment'>
					<td><b>Código Materia:</b></td> 
					<td><?php echo $campo['ide_materia'];?></td>
				</tr>
				<tr class='ui purple table segment'>
					<td><b>Nombre Materia:</b></td> 
					<td><?php echo $campo['nom_materia'];?></td>
				</tr>
				<tr class='ui purple table segment'>
					<td><b>Descripción Materia:</b></td> 
					<td><?php echo $campo['inf_materia'];?></td>
				</tr>
				<tr class='ui purple table segment'>
					<td><b>Estado Materia:</b></td> 
					<td><?php echo $campo['est_materia'];?></td>
				</tr>
				<?php 
					}
				 ?>
				<tr class='ui purple table segment'>
					<td colspan="2">
						<a href="listarMateria.php" class=" mini ui green button">Cancelar</a>
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