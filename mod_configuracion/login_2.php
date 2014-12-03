<?php 
/*******************************************************************
***************** En esta seccion hacemos conexion ****************
***************** con la base de datos que tiene    ****************
***************** almacenado los usuarios y         ****************
***************** contraseñas para los administradores**************
********************************************************************/
?>
<?php
require("configuracion.php");
require("funciones.php");
session_start();
$_SESSION=array();

if ($_POST["usuario"]){
	$conn_bd = mysql_connect($bd_host,$bd_usuario,$bd_pass) or die("Error en la conexión a la base de datos");
	mysql_select_db($bd_base, $conn_bd);
	$pass = ($_POST["password"]);
	$sql="SELECT * FROM administradores WHERE login='".htmlentities($_POST["usuario"])."' and password='".$pass."'";
	$result = mysql_query($sql,$conn_bd);
	if (mysql_num_rows($result)==1){
		$_SESSION["login"]=mysql_result($result,0,"login");
		$_SESSION["password"]=mysql_result($result,0,"password");
		$_SESSION["nombre"]=mysql_result($result,0,"nombre");
		header("Location: ../mod_admin/index.php");
	}else
	{
		?>
        <script type="text/javascript">
		alert("\tUsuario o Password incorrecto \n \tFavor de verificar los datos\n \tó No tiene acceso a esta área");
		window.location = "../login.php";
		</script>
		<?php 
    }
}
?>		
		<script type="text/javascript">
		window.location = "../login.php";
		</script>