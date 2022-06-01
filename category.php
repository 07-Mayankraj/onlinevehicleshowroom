<?php
include('common/dbconnect.php');
if(isset($_REQUEST['cat']) && $_REQUEST['cat']!='')
{
	$id = $_REQUEST['cat'];
	 $sql = "select * from product where category = '$id'";

	$q = mysql_query($sql);
	if(mysql_num_rows($q)==0)
	{
		
		header("location:index.php");
	}
	
}else
{
	header("location:index.php");
	
}

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
<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.etalage.min.js"></script>
<!-- Include the Etalage files -->
<script>
		jQuery(document).ready(function($){

			$('#etalage').etalage({
				thumb_image_width: 400,
				thumb_image_height: 350,
				
				show_hint: true,
				click_callback: function(image_anchor, instance_id){
					alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
				}
			});
			// This is for the dropdown list example:
			$('.dropdownlist').change(function(){
				etalage_show( $(this).find('option:selected').attr('class') );
			});

	});
</script>
<!----//details-product-slider--->
</head>
<body>
<?php 
	include("common/header1.php");
	?>
<?php 
	include("common/sidebar.php");
	
	?>		
			</div>
			<div class="new-product">
				<div class="new-product-top">
					<ul class="product-top-list">
						<li><a href="index.php">Home</a>&nbsp;<span>&gt;</span></li>
						<li><a href="cars.php">Products</a>&nbsp;<span>&gt;</span></li>
						<li><span class="act">New Products</span>&nbsp;</li>
					</ul>
					<p class="back"><a href="index.php">Back to Previous</a></p>
					<div class="clearfix"></div>
				</div>
	
                    
	
				<div class="new-topday">
					<h3 class="new-models">Our Products</h3>
					
		<?php
		 
		 
		   while($r = mysql_fetch_array($q))
		   {
		?>
					
					<a href="productdetail.php?pid=<?php echo $r['id'];?>"><div class="today-new-left">
						<img src="upload/<?php echo $r['image']; ?>" style="width:400px; height:200px;" class="img-responsive">
						
					</div></a>
					
					
				<?php
				
		   }
		   
				?>
					
					<div class="clearfix"></div>
				</div>
				<h3 class="new-models">New Models</h3>
				<div class="best-seller">
					<div class="biseller-info">
					<ul id="flexiselDemo3">
						<li>
							<div class="biseller-column">
							<img src="images/brio.png" alt="">
							</div>
						</li>
						<li>
							<div class="biseller-column">
							<img src="images/i20.jpg" alt="">
							</div>
						</li>
						<li>
							<div class="biseller-column">
							<img src="images/city.png" alt="">
							</div>
						</li>
						<li>
							<div class="biseller-column">
							<img src="images/-amaze.jpg" alt="">
							</div>
						</li>
			     	</ul>
					</div>
			</div>
			<script type="text/javascript">
				 $(window).load(function() {
					$("#flexiselDemo3").flexisel({
						visibleItems: 3,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
				    	responsiveBreakpoints: { 
				    		portrait: { 
				    			changePoint:480,
				    			visibleItems: 1
				    		}, 
				    		landscape: { 
				    			changePoint:640,
				    			visibleItems: 2
				    		},
				    		tablet: { 
				    			changePoint:768,
				    			visibleItems: 3
				    		}
				    	}
				    });
				    
				});
			   </script>
			<h3 class="new-models">Cars</h3>
				<div class="best-seller">
					<div class="biseller-info">
					<ul id="flexiselDemo1">
						<li>
							<div class="biseller-column">
							<img src="images/brv.jpg" alt="">
							</div>
						</li>
						<li>
							<div class="biseller-column">
							<img src="images/creta.jpg" alt="">
							</div>
						</li>
						<li>
							<div class="biseller-column">
							<img src="images/model.png" alt="">
							</div>
						</li>
						<li>
							<div class="biseller-column">
							<img src="images/swift.png" alt="">
							</div>
						</li>
						<li>
							<div class="biseller-column">
							<img src="images/accord.jpg" alt="">
							</div>
						</li>
			     	</ul>
					</div>
			</div>
			<script type="text/javascript">
				 $(window).load(function() {
					$("#flexiselDemo1").flexisel({
						visibleItems: 3,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,    		
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
				    	responsiveBreakpoints: { 
				    		portrait: { 
				    			changePoint:480,
				    			visibleItems: 1
				    		}, 
				    		landscape: { 
				    			changePoint:640,
				    			visibleItems: 2
				    		},
				    		tablet: { 
				    			changePoint:768,
				    			visibleItems: 3
				    		}
				    	}
				    });
				    
				});
			   </script>
			   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
			</div>
			<div class="clearfix"></div>
		</div>
		<!--- fOOTER Starts Here --->
		<?php 
	include("common/footer1.php");
	?>
	<!--- fOOTER Starts Here --->
</body>
</html>