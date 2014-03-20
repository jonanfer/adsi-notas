<?php 
class Notas extends  BaseDatos
{
	// Atributos
	protected $ide_nota;
	protected $nt1_nota;
	protected $nt2_nota;
	protected $nt3_nota;
	protected $usuario_ide;
	protected $materia_ide;

	

	// Metodos

	// ==========================================================
	// Insertar Notas
	// ==========================================================	
	public function insertarNota($nt1, $nt2, $nt3, $usu, $mat)
	{
		$this->nt1_nota = $nt1;
		$this->nt2_nota = $nt2;
		$this->nt3_nota = $nt3;
		$this->usuario_ide = $usu;
		$this->materia_ide = $mat;

		$this->sql = "INSERT INTO tbl_notas VALUES (default,
												    $this->nt1_nota,
												    $this->nt2_nota,
												    $this->nt3_nota,
												    $this->usuario_ide,
												    $this->materia_ide);";
		$this->abrirBaseDatos();
		$this->ejecutarConsulta($this->sql);
		$this->cerrarBaseDatos();
	}
	public function listarAprendiz($us)
	{
		$this->sql = "SELECT * FROM tbl_usuarios 
		INNER JOIN tbl_notas 
		ON ide_usuario = usuario_ide
		INNER JOIN tbl_materias
		ON ide_materia = materia_ide WHERE usuario_ide = $us;";

		$this->abrirBaseDatos();
		$this->res = $this->ejecutarConsulta($this->sql);

		while ($campo = mysql_fetch_array($this->res)) 
		{
			echo "<tr>";
			echo "<td>".$campo['ide_usuario']."</td>";
			echo "<td>".$campo['ide_materia']."</td>";
			echo "<td>".$campo['nom_materia']."</td>";
			echo "<td>".$campo['nt1_nota']."</td>";
			echo "<td>".$campo['nt2_nota']."</td>";
			echo "<td>".$campo['nt3_nota']."</td>";
			echo "</tr>";
		}
		$this->cerrarBaseDatos();
	}
	public function asignarNotasMateria($id, $ide_usu, $nt1_usu, $nt2_usu, $nt3_usu)
    {
    	$this->ide_materia = $id;
		$this->usuario_ide = $ide_usu;
		$this->nt1_nota    = $nt1_usu;
		$this->nt2_nota    = $nt2_usu;
		$this->nt3_nota    = $nt3_usu;

		$this->sql = "UPDATE tbl_notas
					  SET      nt1_nota = $this->nt1_nota,
						       nt2_nota = $this->nt2_nota,
						       nt3_nota = $this->nt3_nota
					  WHERE usuario_ide = $this->usuario_ide
					  AND   materia_ide = $this->ide_materia;";


		$this->abrirBaseDatos();
        $this->ejecutarConsulta($this->sql);
        $this->cerrarBaseDatos();
    }
    public function asignarMateria($id, $ide_materia)
    {
    	$this->nt1_nota    = 0;
		$this->nt2_nota    = 0;
		$this->nt3_nota    = 0;
		$this->usuario_ide = $id;
		$this->materia_ide = $ide_materia;

		$this->sql = "INSERT INTO tbl_notas VALUES (default,
													$this->nt1_nota,
													$this->nt2_nota ,
													$this->nt3_nota ,
												 	$this->usuario_ide,
													$this->materia_ide);";

        $this->abrirBaseDatos();
        $this->ejecutarConsulta($this->sql);
        $this->cerrarBaseDatos();
    }
}

?>