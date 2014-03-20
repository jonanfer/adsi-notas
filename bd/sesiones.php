<?php 
class Sesiones
{
	public function ingresar()
	{
		session_start();
	}

	public function seguridad()
	{
       if (!isset($_SESSION['userRole'])) 
       {
       	  echo "<script>";
          //echo "alert('Usted es un aprendiz estamos en mantenimiento.');";
          echo "window.location.replace('./')";
          echo "</script>";
       }
	}

	public function seguridad2()
	{
		if($_SESSION['userRole'] == "Instructor")
		{
			echo "<script>";
			echo "window.location.replace('../index.php');";
			echo "</script>";
		}
        else
        {
		   if($_SESSION['userRole'] == "Aprendiz")
		   {
		   	echo "<script>";
		   	echo "window.location.replace('../index.php');";
		   	echo "</script>";
		   }
	    }
	
	}

	public function cerrar()
	{
		session_destroy();

			echo "<script>";
			echo "window.location.replace('../index.php');";
			echo "</script>";
	}
}

 ?>