<?php
   ob_start();
   session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html>
   
   <head>
      <title>sign up</title>
  
   </head>
	
   <body>
      
      <h2>Enter Username and Password</h2> 
      <div class="container form-signin">
         
         <?php
            $msg = '';
           if(isset($_POST['login'])){
            if ( !empty($_POST['userid']) && !empty($_POST['password'])) {
				
				   $newusername=$_POST['userid'];                // $newusername is entered by the user
				   $name=$_POST['username'];        // $username is entered by the user
				   $newpassword=$_POST['password'];        // $username is entered by the user
				  
					$myfile = fopen("passwords.txt", "a") ;
					$txt = $name." ".$newusername." ";
					fwrite($myfile, $txt);
					$txt = "$newpassword \n";
					fwrite($myfile, $txt);
					fclose($myfile);

                  $msg= 'You have registered successfully';
			}
               
			   else 
               {
                  $msg = 'Wrong username or password';
               }
		   }
		   
         ?>
		 
      </div> <!-- /container -->
      
      <div class="container">
      
         <form class="form-signin" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <h4 class="form-signin-heading"><?php echo $msg; ?></h4>
            <input type="text" class="form-control" name="username" placeholder="username" required autofocus></br>
			<input type="text" class="form-control" name="userid" placeholder="userid" required autofocus></br>
            <input type="password" class="form-control" name="password" placeholder="password" required><br><br>
            <button  type="submit" name="login" value="login" >signup</button>
			
			
         </form>
		<form action="index.php" >
			<input  type="submit" value="back">
		</form>
         
      </div> 
      
   </body>
</html>