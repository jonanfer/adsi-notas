<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de Materias</title>
	<link rel="stylesheet" href="../dist/css/semantic.min.css">
	<link rel="stylesheet" href="../dist/css/style.css">
</head>
<body>

  <div class="content">
   <?php
     //include 'security/auth.php';
     include '../layout/topnavbar.php';
    ?>
		<table class="ui inverted table segment">
          <thead>
          <tr>
			<td colspan="4">
				<h2>Lista de Materias</h2>
				<a href="adicionarMateria.php" class="mini ui red button">Adicionar Materia</a>
			</td>
			</tr>
            <tr>
               <th class="ui inverted purple segment">Cod. Materia</th>
               <th class="ui inverted purple segment">Nombre</th>
               <th class="ui inverted purple segment">Descripción</th>
               <th class="ui inverted purple segment">Acciones</th>
          </tr>
          </thead>
          <tbody>
          <?php 
				    include '../bd/bd.php';
					include '../bd/materias.php';
					
					$lus = new Materias();
					$lus->listarMaterias();
				?>
				</tbody>
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
	<script>
	function confirmar(id)
	{
		var conf = confirm("Realmente desea eliminar este usuario ?");
		if(conf == true) 
		{
			window.location.replace('eliminar.php?id='+id);
		}
	}
	</script>
</body>
</html>