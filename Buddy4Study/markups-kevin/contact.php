<?php
 include 'index.html'
?>
<?php
			$servername="localhost";
			$username="root";
			$pass="";
			$db="buddy4study";
			$conn=mysqli_connect($servername,$username,$pass,$db);
			$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
			$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
			$message = mysqli_real_escape_string($conn, $_REQUEST['message']);
			$sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";
			mysqli_query($conn, $sql);
			mysqli_close($conn);
?>