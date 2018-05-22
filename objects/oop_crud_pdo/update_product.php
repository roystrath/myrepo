<?php 

include "class.product.php";
include "head.php";


$product = new Product();


//get Edit id's data

if(isset($_GET['editId']))
{
	$editId=$_GET['editId'];
	extract($product->getId($editId));
}


//Update record

if(isset($_REQUEST['edit']))
{
	$editId=$_GET['editId'];
	
	$product_name=$_REQUEST['product_name'];
	$product_quantity=$_REQUEST['product_quantity'];
	$price=$_REQUEST['price'];
	$total_price= $product_quantity*$price;
	
	if($product->update($editId,$product_name,$product_quantity,$price,$total_price))
	{
		echo "<script>alert('Product Updated successfuly')
			window.location.href='list_product.php';</script>";
	}
	else{
		echo "<script>alert('Product does not Updated please try again')
			window.location.href='list_product.php';</script>";
			 
	}
	
}


//cancel button
if(isset($_REQUEST['cancel']))
{
	header("location:list_product.php");
}

?>



<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>



<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
 
<center> <h2 style="color:red"><strong> Update Product </strong></h2></center>

  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
   
    <form method="post">
	
	
		<input type="hidden" name="editId" value="<?php echo $editId ;?>" > 
    
    
     
     <div class="form-group ">
      <label class="control-label requiredField" for="product_name">
       Product Name
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        Product Name
       </div>
       <input class="form-control"  name="product_name" placeholder="Enter Product Name" type="text" value="<?php echo $product_name;?>" required />
       <div class="input-group-addon">
        <i class="fa fa-shopping-cart">
        </i>
       </div>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="product_quantity">
       Quantity
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        Quantity
       </div>
       <input class="form-control" id="product_quantity" name="product_quantity" placeholder="Enter Quantity" type="number" value="<?php echo $product_quantity;?>" required />
       <div class="input-group-addon">
        <i class="fa fa-database">
        </i>
       </div>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="price">
       Price
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        Price
       </div>
       <input class="form-control" id="price" name="price" placeholder="Enter Price" type="text" value="<?php  echo $price ;?>" required />
       <div class="input-group-addon">
        <i class="fa fa-money">
        </i>
       </div>
      </div>
     </div>
	 <center>
     <div class="form-group">
      <div>
	 
		<button class="btn btn-primary " name="edit" type="submit">
        Update
       </button>
	   <button class="btn btn-primary " name="cancel" type="submit">
        Cancel
       </button>
	  
	  
	  
      </div>
	  
	  
     </div>
	 </center>
    </form>
   </div>
  </div>
 </div>
</div>
