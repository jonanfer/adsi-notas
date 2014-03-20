<?php 
class Usuarios extends  BaseDatos
{
	// Atributos
	protected $ide_usuario;
	protected $nom_usuario;
	protected $ape_usuario;
	protected $nick_usuario;
	protected $ima_usuario;
	protected $eda_usuario;
	protected $cor_usuario;
	protected $rol_usuario;
	protected $est_usuario;
	protected $clave;

	

	// Metodos

	// ==========================================================
	// Insertar Usuario
	// ==========================================================	
	public function insertarUsuario($ide, $nom, $ape, $nick, $ima, $eda, $cor, $rol, $est, $cla)
	{
		$this->ide_usuario = $ide;
		$this->nom_usuario = $nom;
		$this->ape_usuario = $ape;
		$this->nick_usuario = $nick;
		$this->ima_usuario = $ima;
		$this->eda_usuario = $eda;
		$this->cor_usuario = $cor;
		$this->rol_usuario = $rol;
		$this->est_usuario = $est;
		$this->clave = $cla;

		$this->sql = "INSERT INTO tbl_usuarios VALUES ($this->ide_usuario,
												'$this->nom_usuario',
												'$this->ape_usuario',
												'$this->nick_usuario',
												'$this->ima_usuario',
												 $this->eda_usuario,
												'$this->cor_usuario',
												'$this->rol_usuario',
												'$this->est_usuario',
												$this->clave);";
		$this->abrirBaseDatos();
		$this->ejecutarConsulta($this->sql);
		$this->cerrarBaseDatos();
	}
	// ==========================================================
	// Listar Usuarios
	// ==========================================================
	public function listarUsuarios()
	{
		$this->sql = "SELECT * FROM tbl_usuarios WHERE rol_usuario = 'Aprendiz';";

		$this->abrirBaseDatos();
		$this->res = $this->ejecutarConsulta($this->sql);
		while ($campo = mysql_fetch_array($this->res)) 
		{
			echo "<tr>";
			echo "<td>".$campo['ide_usuario']."</td>";
			echo "<td>".$campo['nom_usuario']." ".$campo['ape_usuario']."</td>";
			echo "<td>".$campo['cor_usuario']."</td>";
			echo "<td>";
			echo "<a href='../aprendiz/consultar.php?id=".$campo['ide_usuario']."'>
			<i class='circular inverted red search icon'></i></a> | ";
			echo "<a href='../aprendiz/modificar.php?id=".$campo['ide_usuario']."'>
			<i class='circular inverted teal edit sign icon'></i></a> | ";
			echo "<a href='../aprendiz/asignar.php?id=".$campo['ide_usuario']."'>
			<i class='circular inverted green upload icon'></i></a> | ";
			echo "<a href='javascript:;' onclick='confirmar(".$campo['ide_usuario'].");'>
			<i class='circular inverted purple trash icon'></i></a>";
			echo "</td>";
			echo "</tr>";
		}
		$this->cerrarBaseDatos();
	}
	// ==========================================================
	// Listar Instructores
	// ==========================================================
	public function listarInstructores()
	{
		$this->sql = "SELECT * FROM tbl_usuarios WHERE rol_usuario = 'Instructor';";

		$this->abrirBaseDatos();
		$this->res = $this->ejecutarConsulta($this->sql);
		while ($campo = mysql_fetch_array($this->res)) 
		{
			echo "<tr>";
			echo "<td>".$campo['ide_usuario']."</td>";
			echo "<td>".$campo['nom_usuario']." ".$campo['ape_usuario']."</td>";
			echo "<td>".$campo['cor_usuario']."</td>";
			echo "<td>";
			echo "<a href='consultarInstructor.php?id=".$campo['ide_usuario']."'>
			<i class='circular inverted red search icon'></i></a> | ";
			echo "<a href='modificarInstructor.php?id=".$campo['ide_usuario']."'>
			<i class='circular inverted green edit sign icon'></i></a> | ";
			echo "<a href='javascript:;' onclick='confirmar(".$campo['ide_usuario'].");'>
			<i class='circular inverted purple trash icon'></i></a>";
			echo "</td>";
			echo "</tr>";
		}
		$this->cerrarBaseDatos();
	}
	// ==========================================================
	// Listar Imagen Usuario
	// ==========================================================
	public function imagenUsuario($us)
	{
		$this->sql = "SELECT ima_usuario FROM tbl_usuarios WHERE ide_usuario = $us;";

		$this->abrirBaseDatos();
		$this->res = $this->ejecutarConsulta($this->sql);
		while ($campo = mysql_fetch_array($this->res)) 
		{
			echo "<img class='rounded ui image' src=".$campo['ima_usuario'].">";	
		}
		$this->cerrarBaseDatos();
	}
	// ==========================================================
	// Listar Datos Usuario
	// ==========================================================
	public function datUsuario($us)
	{
		$this->sql = "SELECT ide_usuario, nom_usuario, eda_usuario, cor_usuario FROM tbl_usuarios WHERE ide_usuario = $us;";

		$this->abrirBaseDatos();
		$this->res = $this->ejecutarConsulta($this->sql);
		while ($campo = mysql_fetch_array($this->res)) 
		{
			echo "<tr>";
			echo "<td>".$campo['ide_usuario']."</td>";
			echo "<td>".$campo['nom_usuario']."</td>";
			echo "<td>".$campo['eda_usuario']."</td>";
			echo "<td>".$campo['cor_usuario']."</td>";
			echo "</tr>";	
		}
		$this->cerrarBaseDatos();
	}
	// ==========================================================
	// Consultar Usuario
	// ==========================================================
	public function consultarUsuario($id)
	{
		$this->sql = "SELECT * FROM tbl_usuarios 
					  WHERE ide_usuario = $id;";

		$this->abrirBaseDatos();
		return $this->res = $this->ejecutarConsulta($this->sql);

		$this->cerrarBaseDatos();
	}
	// ==========================================================
	// Cargar Formulario de Usuario
	// ==========================================================
	public function formularioUsuario($id)
	{
		$this->sql = "SELECT * FROM tbl_usuarios
					  WHERE ide_usuario = $id";

		$this->abrirBaseDatos();
		return $this->res = $this->ejecutarConsulta($this->sql);

		$this->cerrarBaseDatos();
	}
	// ==========================================================
	// Modificar Usuario
	// ==========================================================
	public function modificarUsuario($ide, $nom, $ape, $nick, $ima, $eda, $cor, $rol, $est, $cla)
	{
		$this->ide_usuario = $ide;
		$this->nom_usuario = $nom;
		$this->ape_usuario = $ape;
		$this->nick_usuario = $nick;
		$this->ima_usuario = $ima;
		$this->eda_usuario = $eda;
		$this->cor_usuario = $cor;
		$this->clave = $cla;
		$this->rol_usuario = $rol;
		$this->est_usuario = $est;

		$this->sqlUpdate = "UPDATE tbl_usuarios SET nom_usuario = '$this->nom_usuario',
		                                      ape_usuario = '$this->ape_usuario',
		                                      nick_usuario = '$this->nick_usuario',
		                                      ima_usuario = '$this->ima_usuario',
											  eda_usuario =  $this->eda_usuario,
											  cor_usuario = '$this->cor_usuario',
											  rol_usuario = '$this->rol_usuario',
											  est_usuario = '$this->est_usuario',
											  clave =  $this->clave
										  WHERE ide_usuario = $this->ide_usuario;";
		$this->abrirBaseDatos();
		$this->ejecutarConsulta($this->sqlUpdate);
		$this->cerrarBaseDatos();
	}
	// ==========================================================
	// Eliminar Usuario
	// ==========================================================
	public function eliminarUsuario($id)
	{
		$this->sql = "DELETE FROM tbl_usuarios 
					  WHERE ide_usuario = $id";

		$this->abrirBaseDatos();
		$this->ejecutarConsulta($this->sql);
		$this->cerrarBaseDatos();
	}

	public function login($usuario, $contra)
	{
        $this->sql = "SELECT * FROM tbl_usuarios WHERE nick_usuario = '$usuario' AND clave = $contra;";
        $this->abrirBaseDatos();
		return $this->ejecutarConsulta($this->sql);
		$this->cerrarBaseDatos();
	}
	public function verUsuario($id)
    {
    	$this->ideE = $id;

    	$this->sql = "SELECT * FROM tbl_usuarios 
					  WHERE ide_usuario = $this->ideE
					  AND rol_usuario = 'Aprendiz'
					  LIMIT 1;";

		$this->abrirBaseDatos();
        $this->res = $this->ejecutarConsulta($this->sql);
        while ($campo = mysql_fetch_array($this->res)) 
		{
			echo "<tr>";
			echo "<td><b>Documento</b></td>";
			echo "<td>".$campo['ide_usuario']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td><b>Nombre</b></td>";
			echo "<td>".$campo['nom_usuario']." ".$campo['ape_usuario']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td><b>Edad</b></td>";
			echo "<td>".$campo['eda_usuario']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td><b>Correo</b></td>";
			echo "<td>".$campo['cor_usuario']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td><b>Rol</b></td>";
			echo "<td>".$campo['rol_usuario']."</td>";
			echo "</tr>";	
		}
		$this->cerrarBaseDatos();			  
    }
	
}

?>