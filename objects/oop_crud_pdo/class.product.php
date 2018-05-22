<?php


//include connection file 

require_once "connect.php";

class Product
{
	
	private $conn;
	
	//constructor
	
	public function __construct()
	{
		$database=new DbConfig();
		$db= $database->dbConnection();
		$this->conn= $db;
	}
	
	
	//function for Insert record
	
	public function store($product_name,$product_quantity,$price,$total_price)
	{
		try
		{
			$stmt= $this->conn->prepare("insert into product(product_name,
								product_quantity,price,total_price)values(:product_name,
								:product_quantity, :price, :total_price) ");
			
			
			$stmt->bindparam(":product_name",$product_name);
			$stmt->bindparam(":product_quantity",$product_quantity);
			$stmt->bindparam(":price",$price);
			$stmt->bindparam(":total_price",$total_price);
			$stmt->execute();
			return $stmt;
			
		}
		catch(PDOException $ex)
		{
			echo $ex->getMessage();
			return false;
		}
	}
	
	
	
	//function for sql query
	
	public function list_product($sql)
	{
		$stmt=$this->conn->prepare($sql);
		return $stmt;
		
	}
	
	
	
	//function for Delete record
	
	public function delete_product($id)
	{
		$stmt=$this->conn->prepare("delete from product where id=:id");
		$stmt->bindparam(":id",$id);
		$stmt->execute();
		return true;
	}
	
	
	//function for get Edit Id's data
	
	public function getId($editId)
	{
		$stmt=$this->conn->prepare("select * from product where id=:editId");
		$stmt->execute(array(":editId"=>$editId));
		$editRow=$stmt->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}
	
	//function for Update record
	
	public function update($editId,$product_name,$product_quantity,$price,$total_price)
	{
		try
		{
			
			$stmt=$this->conn->prepare("update product set 
										product_name=:product_name, product_quantity=:product_quantity, 
										price=:price, total_price=:total_price where id=:editId");
			
			
			$stmt->bindparam(":product_name",$product_name);
			$stmt->bindparam(":product_quantity",$product_quantity);
			$stmt->bindparam(":price",$price);
			$stmt->bindparam(":total_price",$total_price);
			$stmt->bindparam(":editId",$editId);
			$stmt->execute();
			return $stmt;
		}
		catch(PDOException $ex)
		{
			echo $ex-> getMessage();
			return false;
		}
	}
	
}

?>