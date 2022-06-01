<?php
include('../common/dbconnect.php');
include('admin_common/loginverify.php');
$msg = '';
if(isset($_POST['save']))
{
$oldpassword = $_POST['oldpassword'];
$password = $_POST['password'];

echo $sql = "select * from user where id = '".$_SESSION['uid']."' and password = '$oldpassword'";
$q  = mysql_query($sql);
if(mysql_num_rows($q)>0)
{
$sql = "update user set password ='$password' where id = '".$_SESSION['uid']."'";
mysql_query($sql);
header('location:changepassword.php?act=1');

}else
{
header('location:changepassword.php?act=2');
}
}

if(isset($_REQUEST['act']) && $_REQUEST['act']=='1')
{
$msg = '<div class="alert alert-success">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Password Change Successfully.
</div>';
}

if(isset($_REQUEST['act']) && $_REQUEST['act']=='2')
{
$msg = '<div class="alert alert-danger">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error!</strong> Wrong Old Password.
</div>';
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
                        <h1 class="page-head-line">Change Password</h1>
                        

                    </div>
                </div>
                <!-- /. ROW  -->
             
			 <div class="row">
                 <div class="col-md-12 col-sm-6 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                          Change Password Setting
                        </div>
                        <div class="panel-body">
						
						<?php
						echo $msg;
						?>
						
						
						<form action="changepassword.php" method="post">
						 <div class="form-group">
                         <label>Old Password </label>
                         <input class="form-control" type="password" id="oldpassword" name="oldpassword" required>
                                            
                         </div>
						 
						 <div class="form-group">
                         <label>New Password</label>
                        
 <input id="password"  class="form-control" name="password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="New Password" required>   

   
                         </div>
						 
						  <div class="form-group">
                         <label>Confirm Password</label>
                         
 <input id="password_two" class="form-control" name="password_two" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" placeholder="Confirm Password" required>                   
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
