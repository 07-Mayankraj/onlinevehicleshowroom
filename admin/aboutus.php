<?php
include('../common/dbconnect.php');
include('admin_common/loginverify.php');

if(isset($_POST['save']))
{
$description = mysql_real_escape_string($_POST['description']);


$sql="update  page set description='$description' where id = '1'";
mysql_query($sql);
header('location:aboutus.php');
}

	
	$sql = "select * from page where id = '1'";
	$q = mysql_query($sql);
		$r = mysql_fetch_array($q);
	




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
                        <h1 class="page-head-line">Add About Us</h1>
                        

                    </div>
                </div>
                <!-- /. ROW  -->
             
			 <div class="row">
                 <div class="col-md-12 col-sm-6 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           About us
                        </div>
                        <div class="panel-body">
						<form action="aboutus.php" method="post">
						
						
													
<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
 <script type="text/javascript" src="js/ckfinder/ckfinder.js"></script>				
						<div class="form-group">
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
                            
				  <button type="submit" name="save" class="btn btn-info">Edit </button>			</form>				
							  
							
							
							
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
