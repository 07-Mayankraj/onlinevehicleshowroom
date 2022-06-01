<?php
include('common/dbconnect.php');
$sql = "select * from page where id='1'";
		 $q = mysql_query($sql);
		 $r = mysql_fetch_array($q)
		  
?>
<html>
<head>
<title>Online Vehicle</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
<script src="js/jquery.etalage.min.js"></script>
<link href="css/component.css" rel='stylesheet' type='text/css' />
<!-- Include the Etalage files -->
<!----//details-product-slider--->
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
			   </script>	
</head>
<body>
<!-- Header Starts Here -->
<div class="header">
	<div class="container">
		<div class="header-top">
			<div class="logo">
				<a href="index.php"><img src="images/logo2.jpg"></a>
			</div>
			<span class="menu"></span>
			<div class="clear"></div>
			<div class="navigation">
				<ul class="navig">
					<li><a href="index.php">Home</a></li>
					<li><a href="cars.php">Products</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>
				<script>
					$( "span.menu" ).click(function() {
					  $( ".navigation ul.navig" ).slideToggle( "slow", function() {
					    // Animation complete.
					  });
					});
				</script>
			</div>
			<div class="clearfix"></div>
		</div>
		
<?php 
	include("common/sidebar.php");
	
	?>

			</div>
			<div class="new-product">
				<div class="new-product-top">
					<ul class="product-top-list">
						<li><a href="index.php">Home</a>&nbsp;<span>&gt;</span></li>
						<li><span class="act">About Us</span>&nbsp;</li>
					</ul>
					<p class="back"><a href="index.php">Back to Previous</a></p>
					<div class="clearfix"></div>
				</div>
				<div class="sap_tabs">	
				     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						 			  	 
							
							
									<div class="facts">
									
									<h2>&nbsp&nbsp<u>About us</u></h2>
									  <?php echo $r['description']; ?>
									  
							        </div>
							     	
							      
									
							 </div>
					      </div>
					 </div>
					
			</div>
			<div class="clearfix"></div>
			<!--- fOOTER Starts Here --->
		<?php 
	include("common/footer1.php");
	?>
</body>
</html>
