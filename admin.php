
<?php
session_start();
$username = $_SESSION['name'];
echo 'welcome '.$username;
?>

<?php
	
	if(isset($_POST['submit']))		//check if username is not null
	{
		if(isset($_POST['customer_name']) )
		{
		$user_data = fopen($_POST['customer_name'].'.txt','r') or die("Unable to open file!");
		while(!feof($user_data)) {
			echo fgets($user_data) . "<br>";
				}
		
			
			
		fclose($user_data);
		}
		else 
		{
			echo "Enter valid user name";	
		}
	}
	
	if(isset($_POST['total_profit']))
	{
		echo "profit from all the customers =".$$_SESSION['profit'];
	}
	
?>

<form method=post>
			Name: <input type="text" name="customer_name">
			
			
			<input type="submit" name="submit"><br>
			<input type="submit" name="total_profit">
</form>
<form action="index.php" >
			<input  type="submit" value="logout">
		</form>