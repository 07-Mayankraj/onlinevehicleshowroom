<?php
include('../common/dbconnect.php');
include('admin_common/loginverify.php');
$error="";
if(isset($_POST['save']))
{

$f_newname='';	
$productname = $_POST['productname'];	
$category = $_POST['category'];		
$description = mysql_real_escape_string($_POST['description']);
$price = $_POST['price'];		
$rprice = $_POST['rprice'];
$status = $_POST['status'];		
	

$f_name = $_FILES['image']['name'];
//$f_name="image1.jpg";
$f_size=$_FILES['image']['size'];
$f_tmpname=$_FILES['image']['tmp_name'];
$extension_array=explode('.',$f_name);
$f_extension=strtolower(end($extension_array));
if($f_extension=="jpg" ||
$f_extension=="jpeg" ||
$f_extension=="png" ||
$f_extension=="gif")
{
if($f_size<=1048576)
{
$f_newname=uniqid().'.'.$f_extension;
//$f_newname=6566225544.png;

$location="../upload/".$f_newname;
move_uploaded_file($f_tmpname,$location);
}
else
{
$error="File size limit only 1 MB";
}
}else
{
$error="Only Jpeg,jpg,png,gif files are allowed";
}

if($error=="")
{	
$sql="insert into product(productname,category,description,price,rprice,status,image) values('$productname','$category','$description','$price','$rprice','$status' ,'$f_newname' )";

mysql_query($sql);
header("location:product.php");
}

}
?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	
	
		
</head>
<body>
    <div id="wrapper">
   <?php
   include("admin_common/header.php");
   ?>
	
		
		<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add Product</h1>
                        

                    </div>
                </div>
                <!-- /. ROW  -->
             
			 <div class="row">
                 <div class="col-md-12 col-sm-6 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                          Product
                        </div>
                        <div class="panel-body">
				<?php
				echo $error;
				?>
	<form action="addproduct.php" method="post" enctype="multipart/form-data">
						 <div class="form-group">
                         <label>Product Name </label>
                         <input class="form-control" type="text" required name="productname">
                                            
                         </div>
						 
						 <div class="form-group">
                              <label>Category</label>
                              <select class="form-control" required name="category">
							  <?php
							  $sql ="select * from category";
							  $cq = mysql_query($sql);
							  while($cr = mysql_fetch_array($cq))
							  {
							  ?>
                                <option value="<?php echo $cr['id'];?>"><?php echo $cr['categoryname']; ?></option>
								
							   <?php
							   }
							   ?>	
							
                              </select>
                         </div>
						 
						 
						 <div class="form-group">
                         <label>Price  </label>
                         <input class="form-control" required type="number" name="price">
                                            
                         </div>
						 
						 
						 <div class="form-group">
                         <label>Reduced price  </label>
                         <input class="form-control" required type="number" name="rprice">
                                            
                         </div>
						 
						 <div class="form-group">
                         <label>Image  </label>
                         <input class="form-control" required type="file" name="image">
                                            
                         </div>
						 
							<div class="form-group">
							<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
 <script type="text/javascript" src="js/ckfinder/ckfinder.js"></script>		
                                            <label>Description</label>
                                           
											
											<textarea name="description" rows="3"  id="content"  ></textarea>
                               <script type="text/javascript">
var editor = CKEDITOR.replace( 'content', {
    filebrowserBrowseUrl : 'js/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : 'js/ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : 'js/ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : 'js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : 'js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : 'js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
CKFinder.setupCKEditor( editor,'js/' );
</script>
											
                                        </div>
                            
						
					<div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="status">
                                                <option value="1">Enable</option>
                                                <option value="0">Disable</option>
                                               
                                            </select>
                                        </div>	 
						 
							
               <button type="submit" name="save" class="btn btn-info">Save </button>			</form>				
							  
							
							
							
							</div> <!--end panel-body-->
                        </div><!--end panel-->
                            </div> <!--end of col-->
           
        </div> <!--end of row-->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    
	</div>
        <!--end of wrapper--->
	
  <?php
   include("admin_common/footer.php");
   ?>
	
	
    <!-- JQUERY SCRIPTS -->
    <script src="js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="js/newcustom.js"></script>


</body>
</html>
