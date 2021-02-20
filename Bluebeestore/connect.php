 <?php
	$firstName = $_POST['firstName'];
	$middleName =  $_POST['middleName'];
	$lastName = $_POST['lastName'];
	$birthday = $_POST['birthday'];
	$gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
	$email = $_POST['email'];
	$password = $_POST['password'] ;
	$pswrepeat = $_POST['pswrepeat'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, middleName, lastName, birthday, gender, phone, address, email, password, pswrepeat ) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ? )");
		$stmt->bind_param("sssssissss", $firstName, $middleName, $lastName, $birthday, $gender, $phone, $address, $email, $password, $pswrepeat);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>