<?php
include('../common/dbconnect.php');
include('admin_common/loginverify.php');
$error = '';
if(isset($_POST['save']))
{
	
$productname = $_POST['productname'];	
$category = $_POST['category'];		
$description = mysql_real_escape_string($_POST['description']);
$price = $_POST['price'];		
$rprice = $_POST['rprice'];
$status = $_POST['status'];			
$preimg = $_POST['preimg'];
$f_newname = $preimg;
$id = $_POST['id'];
$filename = $_FILES['image']['name'];
if($filename!='')
{
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
if(move_uploaded_file($f_tmpname,$location))
@unlink('../upload/'.$preimg);
}
else
{
$error="File size limit only 1 MB";
}
}else
{
$error="Only Jpeg,jpg,png,gif files are allowed";
}

}


if($error=="")
{	
$sql="update  product set productname='$productname',image='$f_newname',category='$category',description='$description',price='$price',rprice='$rprice',status='$status' where id = '$id'";
mysql_query($sql);
header("location:product.php");
}

$_REQUEST['id'] = $id;

}


if(isset($_REQUEST['id']) && $_REQUEST['id']!='')
{
	$id = $_REQUEST['id'];
	$sql = "select * from product where id = '$id'";
	$q = mysql_query($sql);
	if(mysql_num_rows($q)>0)
	{		
		$r = mysql_fetch_array($q);
	}else
	{
		
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
                        <h1 class="page-head-line">Edit Product</h1>
                        

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
	<form action="editproduct.php" method="post" enctype="multipart/form-data">
						 <div class="form-group">
                         <label>Product Name </label>
      <input class="form-control" type="text" value="<?php echo $r['productname'];?>" name="productname" >
                                            
                         </div>
						 
						 <div class="form-group">
                              <label>Category</label>
                              <select class="form-control" name="category">
							  <?php
							  $sql ="select * from category";
							  $cq = mysql_query($sql);
							  while($cr = mysql_fetch_array($cq))
							  {
							  ?>
    <option value="<?php echo $cr['id'];?>" <?php echo ($r['category']==$cr['id'])?'selected':'' ;?>>
	<?php echo $cr['categoryname']; ?>
	</option>
								
							   <?php
							   }
							   ?>	
							
                              </select>
                         </div>
						 
						 
						 <div class="form-group">
                         <label>Price  </label>
    <input class="form-control" type="number" value="<?php echo $r['price'];?>" name="price">
                                            
                         </div>
						 
						 
						 <div class="form-group">
                         <label>Reduced price  </label>
  <input class="form-control" type="number" value="<?php echo $r['rprice'];?>" name="rprice">
                                            
                         </div>
						 
						 <div class="form-group">
                         <label>Image  </label>
						 <img src="../upload/<?php echo $r['image'];?>" style="width:100px;height:100px;" />
                         <input class="form-control" type="file" name="image">
                                            
                         </div>
						 
							<div class="form-group">
							<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
 <script type="text/javascript" src="js/ckfinder/ckfinder.js"></script>		
                                            <label>Description</label>
                                           
	<textarea name="description" rows="3"  id="content"  ><?php echo $r['description'];?></textarea>
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
             <option value="1" <?php echo ($r['status']=='1')?'selected':'' ;?>>Enable</option>
       <option value="0" <?php echo ($r['status']=='0')?'selected':'' ;?>>Disable</option>
                                               
                                            </select>
                     </div>

					 
<input type="hidden" value="<?php echo $r['id']?>" name="id" />
<input type="hidden" value="<?php echo $r['image']?>" name="preimg" />		 
							
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
