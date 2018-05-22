<?php

class DbConfig
{

private $server="localhost";
private $username="root";
private $password="";
private $db_name="crud_product";

public $conn; 

public function dbConnection()
{
		$this->conn=null;
		
		try{
			$this->conn=new PDO("mysql:host=". $this->server . ";dbname=" . $this->db_name, $this->username, $this->password );
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $ex)
		{
			echo "Connection Error:" .$ex->getMessage();
		}
		
		return $this->conn;
}




}

?>