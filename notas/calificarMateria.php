<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Adicionar Notas Analisis</title>
	<link rel="stylesheet" href="../dist/css/semantic.min.css">
	<link rel="stylesheet" href="../dist/css/style.css">
</head>
<body>

		
    <div class="content">
    <?php
     //include 'security/auth.php';
     include '../layout/topnavbar.php';
     include '../bd/bd.php';
     include '../bd/materias.php';
	   include '../bd/notas.php';
     if (isset($_GET)) {
       $id = $_GET['id'];
     }
?>
<div class="marco bgcontainer">

<form action="" method="post">
    
    <table class="ui inverted table segment" id="mar">
      <thead>
        <tr>
            <th colspan="5">
                <h2>Calificar
                <?php 
                  $lma = new Materias();
              $lma->nombreMateria($id); 
            ?>
                </h2>
            </th>
          </tr>
          <tr>
          <td colspan="2">
            <a href="../materias/listarMateria.php" class="tiny ui blue button">
            <i class="home icon"></i> Volver</a>
          </td>
        </tr>
          <tr>
            <th>Documento</th>
          <th>Nombre Completo</th>
          <th>Nota 1</th>
          <th>Nota 2</th>
          <th>Nota 3</th>
          </tr>
      </thead>
        <tbody>
          <?php 
          $lma = new Materias();
          $lma->verMateriaAprendiz($id);
        ?>
        <tr>
          <td colspan="3">
            <input type="submit" value="Guardar" class="tiny ui blue submit button">
          </td>
        </tr>
        </tbody>
    </table>
    
  </form>

  </div>

  <?php 

  if ($_POST) 
  {
    $cont = $_POST['cont'];
    for ($i=0; $i <= $cont-1 ; $i++) 
    { 
        $ide_usu   = $_POST["ide_usu$i"];
        $nt1_usu   = $_POST["nt1_usu$i"];
        $nt2_usu   = $_POST["nt2_usu$i"];
        $nt3_usu   = $_POST["nt3_usu$i"];
        
        $un = new Notas();
        $un->asignarNotasMateria($id, $ide_usu, $nt1_usu, $nt2_usu, $nt3_usu);
    }
    echo "<script>";
    echo "window.location.replace('../materias/listarMateria.php');";
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