<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Messages</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
	</head>
	<body>

		<!--wrapper start-->
		<div class="wrapper">
			<!--header menu start-->
			<div class="header">
				<div class="header-menu">
					<div class="title">THE <span>BLUEBE<br/></span> STORES</div>
					<div class="sidebar-btn">
						<i class="fas fa-bars"></i>
					</div>
					<ul>
						<li><a href="user.html"><i class="fas fa-search"></i></a></li>
						<li><a href="report.html"><i class="fas fa-bell"></i></a></li>
						<li><a href="#"><i class="fas fa-power-off"></i></a></li>
					</ul>
				</div>
			</div>
			<!--header menu end-->
			<!--sidebar start-->
			<div class="sidebar">
				<div class="sidebar-menu">
					<center class="profile">
						<img src="images/user.png" alt="">
						<p>MEENA</p>
					</center>
					<li class="item">
						<a href="index.html" class="menu-btn">
							<i class="fas fa-desktop"></i><span>Dashboard</span>
						</a>
					</li>
					<li class="item" id="Sales Info">
						<a href="sales.html" class="menu-btn">
							<i class="fas fa-chart-bar"></i><span>Sales Info</span>
						</a>
					</li>
					<li class="item" id="messages">
						<a href="#messages" class="menu-btn">
							<i class="fas fa-envelope"></i><span>Messages <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="messages.php"><i class="fas fa-envelope"></i><span>New</span></a>
						</div>
					</li>
					<li class="item" id="settings">
						<a href="#settings" class="menu-btn">
							<i class="fas fa-cog"></i><span>Settings <i class="fas fa-chevron-down drop-down"></i></span>
						</a>
						<div class="sub-menu">
							<a href="settings.html"><i class="fas fa-lock"></i><span>Password</span></a>
						</div>
					</li>
					<li class="item">
						<a href="graphs.html" class="menu-btn">
							<i class="fas fa-plus"></i><span>Others</span>
						</a>
					</li>
				</div>
			</div>
			<!--sidebar end-->
			<!--main container start-->
			<div class="main-container">
				<div class="card">
                    <img class="salesthisweek" src="images/mail.png" width="500" height="300">

                   <div class="maincontent">
                   	    <h3>MAILS</h3>
                   </div>
                    <table>
					  <tr>
					    <th>Name</th>
					    <th>Email</th>
					    <th>Content</th>
					  </tr>
					  <?php
						$con = mysqli_connect("localhost","root","","test");

						if (mysqli_connect_errno()) {
						  echo "Failed to connect to MySQL: " . mysqli_connect_error();
						  exit();
						}

						$sql = "SELECT * FROM emails";

						if ($result = mysqli_query($con, $sql)) {
						  // Fetch one and one row
						  while ($row = mysqli_fetch_row($result)) {
						    echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
						  }
						  mysqli_free_result($result);
						}

						mysqli_close($con);
					  ?>
					  <tr>
				</div>
			</div>
			<!--main container end-->
		</div>
		<!--wrapper end-->

		<script type="text/javascript">
		$(document).ready(function(){
			$(".sidebar-btn").click(function(){
				$(".wrapper").toggleClass("collapse");
			});
		});
		</script>

	</body>
</html>
