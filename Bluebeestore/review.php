 <?php
	
	$titlereview = $_POST['titlereview'];
    $reviews =  $_POST['reviews'];
    $dressID = $_POST['dressID'];
    $userID = $_POST['userID'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into review(dressID, titlereview, reviews, userID ) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $dressID, $titlereview, $reviews, $userID);
		$execval = $stmt->execute();
		echo $execval;
		echo "Review successfully uploaded...";
		$stmt->close();
		$conn->close();
	}
?>