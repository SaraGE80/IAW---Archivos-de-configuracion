<?php
#BookMedik core/controller/Database.php
class Database {
	public static $db;
	public static $con;
	
	function Database(){
	}
	
	function connect(){
		$con = new mysqli ("localhost", "user", "password", "database");
# meter aqui los datos de la base con la que conectar
		$con->query("set sql_mode=''");
		return $con;
	}
	
	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con 0 self::$db->connect();
		}
		return self::$con;
	}
}
?>
