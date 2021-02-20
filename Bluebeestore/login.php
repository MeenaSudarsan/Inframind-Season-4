<?php
  $email = $_POST["email"];
  $password = $_POST["password"];
  // Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("select * from registration where email = ? and password = ?");
		$stmt->bind_param("ss", $email, $password);
		$execval = $stmt->execute();
		$result = $stmt->get_result();
		$count = $result->num_rows;
		$row = $result -> fetch_array(MYSQLI_ASSOC);
		if ($count == 1) {
			$cookie_name = "user";
			$cookie_value = $row['ID'];
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
			if(isset($_COOKIE[$cookie_name])){
				header('Location: index.html');
			}
			else{
				header("Location: login.html");
			}
		}
		else{
				header("Location: login.html");
			}
		$stmt->close();
		$conn->close();
	}
?>