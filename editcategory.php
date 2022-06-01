<?php
include('../common/dbconnect.php');
include('admin_common/loginverify.php');

if(isset($_POST['save']))
{
$categoryname = $_POST['categoryname'];
$id = $_POST['id'];
$sql="update  category set categoryname='$categoryname' where id = '$id'";
mysql_query($sql);

header('location:category.php?act=3');
}


if(isset($_REQUEST['id']) && $_REQUEST['id']!='')
{
	$id = $_REQUEST['id'];
	$sql = "select * from category where id = '$id'";
	$q = mysql_query($sql);
	if(mysql_num_rows($q)>0)
	{		
		$r = mysql_fetch_array($q);
	}else
	{
		
		header("location:category.php");
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
                        <h1 class="page-head-line">Edit Manufacturer</h1>
                        

                    </div>
                </div>
                <!-- /. ROW  -->
             
			 <div class="row">
                 <div class="col-md-12 col-sm-6 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                          Edit Manufacturer
                        </div>
                        <div class="panel-body">
						
						<form action="editcategory.php" method="post">
						 <div class="form-group">
                         <label>Manufacturer Name </label>
                         <input class="form-control" type="text" value="<?php echo $r['categoryname'];?>" name="categoryname">
                                            
                         </div>
						 
						 
					<input type="hidden" value="<?php echo $r['id']?>" name="id" />		
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
