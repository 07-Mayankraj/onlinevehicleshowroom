<?php
include('../common/dbconnect.php');
include('admin_common/loginverify.php');


if(isset($_REQUEST['id']) && $_REQUEST['id']!='')
{
	$id = $_REQUEST['id'];
	$sql = "select * from message where id = '$id'";
	$q = mysql_query($sql);
	if(mysql_num_rows($q)>0)
	{		
		$r = mysql_fetch_array($q);
		$sql = "update message set isread='Read' where id = '$id'";
	    mysql_query($sql);
		
	}else
	{
		
		header("location:message.php");
	}
	
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Admin </title>

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
                        <h1 class="page-head-line">Message Detail</h1>
                        

                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
				
				 <div class="col-md-12">
                     <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         Message
                        </div>
                        <div class="panel-body">
						
						<table class="table table-bordered">
    
    <tbody>
   
      <tr>
        <th width="20%">Name</th>
        <td><?php echo $r['name'];?></td>        
      </tr>
	  
	  <tr>
        <th>Email Id</th>
        <td><?php echo $r['emailid'];?></td>        
      </tr>
	  
	  <tr>
        <th>Message</th>
        <td><?php echo $r['message'];?></td>        
      </tr>
	  
	  
    </tbody>
  </table>
						
						
						</div>
						
						</div>
						
				</div>
					
					
					
					
					

                </div>
                <!-- /. ROW  -->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

   <?php
   include("admin_common/footer.php");
   ?>
	
	<script src="js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="js/newcustom.js"></script>
    


</body>
</html>
