<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de Aprendicez</title>
	<link rel="stylesheet" href="../dist/css/semantic.min.css">
	<link rel="stylesheet" href="../dist/css/style.css">
</head>
<body>

  <div class="content">
  <?php
     //include 'security/auth.php';
     include '../layout/topnavbar.php';
    ?>
    <div class="ui two column middle aligned relaxed grid basic segment">
           <div class="column">
              <div class="center aligned column">
				<?php 
                    include '../bd/bd.php';
					include '../bd/usuarios.php';
					
					$lus = new Usuarios();
					$lus->imagenUsuario($_SESSION['documento']);
				 ?>
              </div>    
           </div>

            <div class="center aligned column">
              <table class="ui inverted table segment">
              <thead>
              <tr>
                <th class="ui inverted purple segment">Documento</th>
                <th class="ui inverted purple segment">Nombre</th>
                <th class="ui inverted purple segment">Edad</th>
                <th class="ui inverted purple segment">Correo Electronico</th>
              </tr>
              </thead>
              <tbody>
              <?php  
                  $lus = new Usuarios();
					        $lus->datUsuario($_SESSION['documento']);
			        ?>
        </tbody>
			  </table>
            </div>
        </div>

         <div class="ui horizontal icon divider">
         <i class="grid layout icon circular"></i>
      </div>

		<table class="ui inverted table segment">
          <thead>
          <tr>
			<td colspan="4">
				<h2>Lista de Aprendicez</h2>
				<a href="../aprendiz/adicionar.php" class="mini ui red button">Adicionar Aprendiz</a>
			</td>
			</tr>
            <tr>
               <th class="ui inverted purple segment">Documento</th>
               <th class="ui inverted purple segment">Nombre Completo</th>
               <th class="ui inverted purple segment">Correo Electrónico</th>
               <th class="ui inverted purple segment">Acciones</th>
          </tr>
          </thead>
          <tbody>
          <?php 				
					  $lus = new Usuarios();
					  $lus->listarUsuarios();
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