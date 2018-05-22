<?php

include "class.product.php";

include "head.php";

$product=new Product();

//list all product

$stmt=$product->list_product("select * from product");
$stmt->execute();
					


//delete product

if(isset($_REQUEST['id']))
{
	$id=$_REQUEST['id'];
	
	
	if($product->delete_product($id))
	{
		echo "<script>alert('Record deleted successfully')
		window.location.href='list_product.php'</script>";
	}
	else
	{
		echo "<script>alert('Record does not deleted please try again')
		window.location.href='list_product.php'</script>";
	}
	
	
	
}	

?>


<p><br/></p>

 <a href="index.php" class="btn btn-primary btn-lg">
        Add more
 </a>
 

<center><h2>List All Product</h2></center>

<form method="post">
	<table class="table table-hover table-bordered">
        <thead>
            <tr>
			  <th>No</th>
			  <th>Product Name</th>
			  
			  <th>Quantity</th>
			  <th>Price</th>
			  <th>Total</th>
			  <th>Date</th>
			  <th>Update/Delete</th>
			</tr>
		</thead>
		 
		<tbody>
		  <?php  $i=1;
			while($row=$stmt->fetch(PDO::FETCH_ASSOC)) { ?>
			<tr>
			  <td><?php echo $i;?></td>
			  <td><?php echo $row['product_name'];?></td>
			  
			  <td><?php echo $row['product_quantity'];?></td>
			  <td><?php echo $row['price'];?></td>
			  <td><?php echo $row['total_price'];?></td>
			  <td><?php echo date("d/m/Y H:i:s",strtotime($row['date_time']));?></td>
			  <td><a class="btn btn-primary btn-flat" href="update_product.php?editId=<?php echo $row['id'];?>"><i class="fa fa-lg fa-plus"></i></a>
			  <a class="btn btn-warning btn-flat" href="list_product.php?id=<?php echo $row['id'];?>"><i class="fa fa-lg fa-trash"></i></a></td>
			</tr>
			
			<?php $i++;
			} ?>
		 
		</tbody>
	</table>
</form>
				
