<?php 
class Materias extends  BaseDatos
{
	// Atributos
	protected $ide_materia;
	protected $nom_materia;
	protected $inf_materia;
	protected $est_materia;


	// Metodos

	// ==========================================================
	// Insertar Materia
	// ==========================================================	
	public function insertarMateria($ide, $nom, $inf, $est)
	{ 
		$this->ide_materia = $ide;
		$this->nom_materia = $nom;
		$this->inf_materia = $inf;
		$this->est_materia = $est;

		$this->sql = "INSERT INTO tbl_materias VALUES ($this->ide_materia,
												      '$this->nom_materia',
												      '$this->inf_materia',
												      '$this->est_materia');";
		$this->abrirBaseDatos();
		$this->ejecutarConsulta($this->sql);
		$this->cerrarBaseDatos();
	}
	// ==========================================================
	// Listar Materia Ingles Basico
	// ==========================================================
	public function listarMaterias()
	{
		$this->sql = "SELECT * FROM tbl_materias;";

		$this->abrirBaseDatos();
		$this->res = $this->ejecutarConsulta($this->sql);
		while ($campo = mysql_fetch_array($this->res)) 
		{
			echo "<tr>";
			echo "<td>".$campo['ide_materia']."</td>";
			echo "<td>".$campo['nom_materia']."</td>";
			echo "<td>".$campo['inf_materia']."</td>";
			echo "<td>";
			echo "<a href='consultarMateria.php?id=".$campo['ide_materia']."'>
			<i class='circular inverted red search icon'></i></a> | ";
			echo "<a href='modificarMateria.php?id=".$campo['ide_materia']."'>
			<i class='circular inverted green edit sign icon'></i></a> | ";
            echo "<a href='../notas/calificarMateria.php?id=".$campo['ide_materia']."'>
			<i class='circular inverted purple id  icon'></i></a>";
			echo "</td>";
			echo "</tr>";
		}
		$this->cerrarBaseDatos();
	}
	// ==========================================================
	// Consultar Materia
	// ==========================================================
	public function consultarMateria($id)
	{
		$this->sql = "SELECT * FROM tbl_materias 
					  WHERE ide_materia = $id;";

		$this->abrirBaseDatos();
		return $this->res = $this->ejecutarConsulta($this->sql);

		$this->cerrarBaseDatos();
	}
	// ==========================================================
	// Cargar Formulario de Materia
	// ==========================================================
	public function formularioMateria($id)
	{
		$this->sql = "SELECT * FROM tbl_materias
					  WHERE ide_materia = $id";

		$this->abrirBaseDatos();
		return $this->res = $this->ejecutarConsulta($this->sql);

		$this->cerrarBaseDatos();
	}
	// ==========================================================
	// Modificar Materia
	// ==========================================================
	public function modificarMateria($ide, $nom, $inf, $est)
	{
		$this->ide_materia = $ide;
		$this->nom_materia = $nom;
		$this->inf_materia = $inf;
		$this->est_materia = $est;

		$this->sql = "UPDATE tbl_materias SET nom_materia = '$this->nom_materia',
											  inf_materia = '$this->inf_materia',
											  est_materia = '$this->est_materia'
										  WHERE ide_materia = $this->ide_materia;";
		$this->abrirBaseDatos();
		$this->ejecutarConsulta($this->sql);
		$this->cerrarBaseDatos();
	}
	public function asignarListaMateria()
    {
    	$this->sql = "SELECT * FROM tbl_materias;";

    	$this->abrirBaseDatos();
    	$this->res = $this->ejecutarConsulta($this->sql);
    	while ($campo = mysql_fetch_array($this->res)) 
		{
			echo "<option value='".$campo['ide_materia']."'>".$campo['nom_materia']."</option>";
		}
		$this->cerrarBaseDatos();
    }
    public function nombreMateria($id)
    {
    	$this->ide_mat = $id;
    	$this->sql = "SELECT * FROM tbl_materias WHERE ide_materia = $this->ide_mat;";

    	$this->abrirBaseDatos();
    	$this->res = $this->ejecutarConsulta($this->sql);
    	while ($campo = mysql_fetch_array($this->res)) 
		{
			echo $campo['nom_materia'];
		}
		$this->cerrarBaseDatos();
    }
    public function verMateriaAprendiz($id)
    {
        $cont = 0;
		$this->ide_mat = $id;
		$this->sql = "SELECT * 
					  FROM tbl_usuarios
					  INNER JOIN tbl_notas
					  ON ide_usuario = usuario_ide
					  INNER JOIN tbl_materias
					  ON ide_materia = materia_ide
					  WHERE materia_ide = $this->ide_mat
					  AND est_usuario = 'Activo';";

		$this->abrirBaseDatos();
		$this->res = $this->ejecutarConsulta($this->sql);
		echo "<input type='hidden' value='$this->ide_mat'>";
		while ($campo = mysql_fetch_array($this->res)) 
		{
			
			echo "<tr>";
			echo "<td>".$campo['ide_usuario']."</td>";
			echo "<td>".$campo['nom_usuario']." ".$campo['ape_usuario']."</td>";
			echo "<td>";
			echo "<input name='ide_usu".$cont."' type='hidden' value='".$campo['ide_usuario']."'>";
			echo "<div class='ui large icon input'>";
			echo "<input name='nt1_usu".$cont."' type='text' style='width: 100px' value='".$campo['nt1_nota']."'>";
			echo "</div>";
			echo "</td>";
			echo "<td>";
			echo "<div class='ui large icon input'>";
			echo "<input name='nt2_usu".$cont."' type='text' style='width: 100px' value='".$campo['nt2_nota']."'>";
			echo "</div>";
			echo "</td>";
			echo "<td>";
			echo "<div class='ui large icon input'>";
			echo "<input name='nt3_usu".$cont."' type='text' style='width: 100px' value='".$campo['nt3_nota']."'>";
			echo "</div>";
			echo "</td>";
			echo "</tr>";
			$cont++;
		}
		echo "<input name='cont' type='hidden' value='".$cont."'>";

		$this->cerrarBaseDatos();
    }	
}

?>