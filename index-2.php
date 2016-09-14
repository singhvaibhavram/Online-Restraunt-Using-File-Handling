<!DOCTYPE html>
<html lang="en">
     <head>
		<title>Menu</title>
		<meta charset="utf-8">
  
		
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="grid.css">
    
     </head>
<body class="page1" >


<form method="post" >
<div class="content">
	<div class="container_12">
		
		<h3 class="head2">Our Menu</h3>
		
    
		<div class="tabs tb gallery">
			<div class="div-nav  ">
				<div class="grid_12">
					<ul class="nav">
						<li class="selected"><a href="#tab-1" class="">Salads</a></li>
						<li><a href="#tab-2">Soups</a></li>
						<li><a href="#tab-3">Appetizers</a></li>
						<li><a href="#tab-4">Beverages</a></li>
						<li><a href="#tab-5">Desserts</a></li>
						<li><a href="#tab-6">Lunch Specials</a></li>
					</ul>
				</div>    
			</div>
			<div class="div-tabs">
				<div  id="tab-1" class="tab-content gallery1">
				<div class="clear"></div>
					<div class="grid_3">
						<a href="images/big1.jpg" class="gal"><img src="images/page3_img1.jpg" alt=""><span></span></a>
						<div class="col2"><span class="col3"><a href="#"><input type="checkbox" name="order[]" value="Cras_facilisis">Cras facilisis</ ></a></span> $ 19.99</div>
						<select name="Cras_facilisis"> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> </select>
					</div>
				</div>
					
					
				
				<div  id="tab-2" class="tab-content gallery2">
                 
						<div class="clear"></div>
						<div class="grid_3">
							<a href="images/big5.jpg" class="gal"><img src="images/page3_img5.jpg" alt=""><span></span></a>
							<div class="col2"><span class="col3"><a href="#"><input type="checkbox" name="order[]" value="straw_montigo">straw montigo</ > </a></span> $ 29.99</div>
							<select name="straw_montigo"> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> </select>
						</div>
						
				</div>
				<div  id="tab-3" class="tab-content gallery3">
						<div class="grid_3">
						<a href="images/big1.jpg" class="gal"><img src="images/page3_img1.jpg" alt=""><span></span></a>
						<div class="col2"><span class="col3"><a href="#"><input type="checkbox" name="order[]" value="stove_chick">stove chick</ ></a></span> $ 39.99</div>
						<select name="stove_chick"> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> </select>
					</div>
					
					
                 
				</div>
				<div  id="tab-4" class="tab-content gallery4">

					<div class="grid_3">
						<a href="images/big2.jpg" class="gal"><img src="images/page3_img2.jpg" alt=""><span></span></a>
						<div class="col2"><span class="col3"><a href="#"><input type="checkbox" name="order[]" value="pine_erat">pine erat </a></span> $ 49.99</div>
						<select name="pine_erat "> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> </select>
					</div>
					
					

				</div>
				<div  id="tab-5" class="tab-content gallery5">
					<div class="grid_3">
						<a href="images/big1.jpg" class="gal"><img src="images/page3_img1.jpg" alt=""><span></span></a>
						<div class="col2"><span class="col3"><a href="#"><input type="checkbox" name="order[]" value="crisp_pon">crisp pon</a></span> $ 59.99</div>
						<select name="crisp_pon"> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> </select>
					</div>
					
                 
					
				</div>
				<div  id="tab-6" class="tab-content gallery6">
					<div class="grid_3">
						<a href="images/big1.jpg" class="gal"><img src="images/page3_img1.jpg" alt=""><span></span></a>
						<div class="col2"><span class="col3"><a href="#"><input type="checkbox" name="order[]" value="Vestibulum_volu">Vestibulum volu</a></span> $ 69.99</div>
						<select name="Vestibulum_volu"> <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> </select>
					</div>
                  
				</div>
			</div>
			</div>
        </div>
	</div>
	<button  type="submit" name="submit">order</button>
</div>

<?php
session_start();
$username = $_SESSION['name'];

if(isset($_POST['order'])){
	$price['Cras_facilisis']=19.99;
	$price['straw_montigo']=29.99;
	$price['stove_chick']=39.99;
	$price['pine_erat']=49.99;
	$price['crisp_pon']=59.99;
	$price['Vestibulum_volu']=69.99;
	
	$myfile = fopen($username.'.txt', "a") ;
	
	foreach($_POST['order'] as $selected) 
	{
				
					$a=$selected;
					
					
					$txt = $selected."-->".$_POST[$a]."\n";
					fwrite($myfile, $txt);
	}
	$sum=0;
	foreach($_POST['order'] as $selected) 
	{
				
					$a=$selected;
					$sum=$sum+$price[$a]*$_POST[$a];
	}
	include("global.php");
	 $_SESSION['profit']=$_SESSION['profit']+$sum;
	echo "total =".$sum."\n";
	echo "thanks for shopping..!";
}

?>

</form >
<form action="index.php" >
			<input  type="submit" value="back">
</form>
</body>
</html>



