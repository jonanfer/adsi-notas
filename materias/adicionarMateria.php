<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Adicionar Materia</title>
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
             <h2>Adicionar Materias</h2>
                 <form action="" method="post">
                      <div class="field">
                        <label>Código Materia</label>
                        <input placeholder="Ingrese Codigo Materia" type="text" name="ide_materia">
                      </div>
                      <div class="field">
                        <label>Nombre Materia</label>
                        <input placeholder="Ingrese Nombre Materia" type="text" name="nom_materia">
                      </div>
                      <div class="field">
                        <label>Descripción Materia</label>
                        <input placeholder="Ingrese Descripción" type="text" name="inf_materia">
                      </div>
                      <div class="field">
                        <label>Estado Materia</label>
                        <select class="ui selection dropdown" placeholder="Ingrese Estado" type="text" name="est_materia">
                           <option value="">Seleccione</option>
                           <option value="Activo">Activo</option>
                           <option value="Inactivo">Inactivo</option>
                        </select>
                      </div>
                    <div class="ui buttons">
                        <a href="listarMateria.php" class="ui green button">Cancelar</a>
                        <div class="or"></div>
                        <input class="ui blue submit button" type="submit" value="Ingresar">
                    </div>
                 </form>
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

<?php
    include '../bd/bd.php';
	include '../bd/usuarios.php';
	

	if ($_POST) 
	{
		$ide = $_POST['ide_materia'];
		$nom = $_POST['nom_materia'];
		$inf = $_POST['inf_materia'];
		$est = $_POST['est_materia'];

		$nu = new Usuarios();
		$nu->insertarMateria($ide, $nom, $inf, $est);
	}
?>
</body>
</html>