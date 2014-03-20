<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificar Materia</title>
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
             <h2>Modificar Materia</h2>
                 <form action="" method="post">
                 <?php 
	               include '../bd/bd.php';
	               include '../bd/materias.php';
	
	               $id = $_GET['id'];

	               $lu = new Materias();
	               $re = $lu->formularioMateria($id);

	               while ($campo = mysql_fetch_array($re)) 
	               {
	             ?>
                      <div class="field">
                        <label>Código Materia</label>
                        <input placeholder="Ingrese Código Materia" type="text" name="ide_materia"
                        value="<?php echo $campo['ide_materia']; ?>" readonly="readonly">
                      </div>
                      <div class="field">
                        <label>Nombre Materia</label>
                        <input placeholder="Ingrese Nombre Materia" type="text" name="nom_materia"
                        value="<?php echo $campo['nom_materia']; ?>" readonly="readonly">
                      </div>
                      <div class="field">
                        <label>Descripción Materia</label>
                        <input placeholder="Ingrese Descripción" type="text" name="inf_materia"
                        value="<?php echo $campo['inf_materia']; ?>">
                      </div>
                      <div class="field">
                        <label>Estado Materia</label>
                        <select class="ui selection dropdown" type="text" name="est_materia"
                        value="<?php echo $campo['est_materia']; ?>">
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
                    <?php
		             }
		             ?>
                 </form>
                 <?php 

		            if ($_POST) 
		            {
		            	$ide = $_POST['ide_materia'];
		            	$nom = $_POST['nom_materia'];
		            	$inf = $_POST['inf_materia'];
		            	$est = $_POST['est_materia'];
            
		            	$mu = new Materias();
		            	$mu->modificarMateria($ide, $nom, $inf, $est);
            
		            	echo "<script>";
		            	echo "window.location.replace('listarMateria.php');";
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