<!DOCTYPE html>
<html lang="en">
     <head>
		<title>Home</title>
		
		<meta charset="utf-8">
    
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="grid.css">
     </head>

<body class="page1">

 <?php
			$_GLOBALS['profit']=0;
			
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
				
				$username=trim($_POST['username']);    // $username is entered by the user
				$password=trim($_POST['password']);    // $password is entered by the user
				
				if($username=='admin' && $password=='admin')    // admin login
				{
					session_start();
						$user='admin';
						$_SESSION['name'] = $user;
						
						header('Location:admin.php');     //admin page
				}
				
				$myfile = fopen("passwords.txt", "r") ;     //opens a file where passwords are stored
				while(!feof($myfile)) {
					
					$line= fgets($myfile) ;
					
					$words=explode(" ",$line);
					
					if(isset ($words[1])  &&  isset($words[2]) && isset($words[0])){
					$usernameex=  trim($words[1]);     // $usernameex is extracted frm file
					$passwordex= trim($words[2]);       // $passwordex is extracted frm file
					$user=trim($words[0]);
					} 
					
					if($username==$usernameex && $password==$passwordex )
					{
						session_start();
						$_SESSION['name'] = $user;
						
						header('Location:index-2.php');    //opens users page
					}
					else{                              //validation
						if(!$_POST['username']){
							$msg = "Please enter UserName.";
						}elseif(!$_POST['password']) {
							$msg = "Please enter Password.";
						}else{
							$msg = "Invalid entry. Try again.";
								}					
						}
					}
                  
				}
         ?>
		 
<div class="login">
<div class="container" align="right">
      
         <form class="form-signin" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <h4 class="form-signin-heading"><?php echo $msg; ?></h4>
            <input type="text" class="form-control" name="username" placeholder="username" required autofocus></br>
            <input type="password" class="form-control" name="password" placeholder="password" required><br>
            <button  type="submit" name="login">Login</button>
			<br><a href="newuser.php">new user..?</a>
         </form>
			
         
      </div> 

</div>
<div class="content">
	
	<a href="index-2.html" class="block1">
		<img src="images/blur_img1.jpg" alt="">
		<span class="price"><span>magna non nunc</span><span>$29.35</span></span>
	</a>
	<a href="index-2.html" class="block1">
		<img src="images/blur_img2.jpg" alt="">
		<span class="price"><span>terto nomino</span><span>$ 35.45</span></span>
	</a>
	<a href="index-2.html" class="block1">
		<img src="images/blur_img3.jpg" alt="">
		<span class="price"><span>metus feugiat</span><span>$50.10</span></span>
	</a>

	<div class="container_12">
		
			<h3>New in Menu</h3>
		
		<div class="grid_3">
			<div class="box maxheight">
				<img src="images/box_img1.jpg" alt="">
				<div class="title">Lorem Ipsum</div>
				Integer convallis orci vel mi nelaoreet, at ornare lorem consequat. Phasellus era nisl auctor vel veliterol. 
				<br>
				<a href="#">More Info</a>
			</div>
		</div>
		<div class="grid_3">
			<div class="box maxheight">
				<img src="images/box_img2.jpg" alt="">
				<div class="title">Aliquamh ante</div>
				Benteger convallis orci veli elaoreet, at ornare loremo konsequat. Phasellus era nisl auctor vel veliterut. 
				<br>
				<a href="#">More Info</a>
			</div>
		</div>
		<div class="grid_3">
			<div class="box maxheight">
				<img src="images/box_img3.jpg" alt="">
				<div class="title">Ulum volutpat</div>
				Hrtolieger convallis omi tem aore, at ornare loren coate. Pasellus era nisl auctor vel veliterolsed pharetra. 
				<br>
				<a href="#">More Info</a>
			</div>
		</div>
		<div class="grid_3">
			<div class="box maxheight">
				<img src="images/box_img4.jpg" alt="">
				<div class="title">Vestibulum volu</div>
				Convallis orci vel mi oreet, at kotornare lorem consequat. Sellus era nisl auctor vel veliterolvenenatis nulla. 
				<br>
				<a href="#">More Info</a>
			</div>
		</div>
  </div>
</div>


    
</body>
</html>