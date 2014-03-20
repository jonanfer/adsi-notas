<?php 
class BaseDatos
{
	protected $conx;
	protected $sql;
	protected $res;
	// ==========================================================
	// abrirBaseDatos
	// ==========================================================
	protected function abrirBaseDatos()
	{
		$this->conx = mysql_connect('localhost', 'root', '');
		mysql_select_db('adsinotas', $this->conx);
	}
	// ==========================================================
	// ejecutarConsulta
	// ==========================================================
	protected function ejecutarConsulta($sql)
	{
		$this->sql = $sql;
		return mysql_query($this->sql);
	}
	// ==========================================================
	// cerrarBaseDatos
	// ==========================================================
	protected function cerrarBaseDatos()
	{
		mysql_close($this->conx);
	}

}


 ?>