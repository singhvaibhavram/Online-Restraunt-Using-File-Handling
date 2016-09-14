
<?php
session_start();
$username = $_SESSION['name'];
echo 'welcome '.$username;
?>

<form action="project.php" >
			<input  type="submit" value="logout">
</form>