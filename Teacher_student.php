<?php  include('teacherstudent.php'); ?>
<?php
include "connection.php";
// $branch = 'All';
// if($_GET['branch'] != null)
// 	$branch = $_GET['branch'];
// // if($userId)
// // {
// 	$sqlStudentQuery = "SELECT * from student ORDER by Id DESC";
// 	if($branch != 'ALL')
// 	{
// 		$sqlStudentQuery = "SELECT * from student where phoneCode2='$branch' ORDER by Id DESC";
// 	}

// $resultStudent = mysqli_query($con,$sqlStudentQuery);
// if(mysqli_num_rows($resultStudent)){
//     $row = mysqli_fetch_array($resultStudent);
// }
// }
// else{
//     $message = "student not found!";
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0">
	<title>Teacher_student</title>
	<link rel="stylesheet"
		href="admin.css">
	<link rel="stylesheet"
		href="admin0.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		table {
		  border-collapse: collapse;
		  width: 100%;
		}
		
		th, td {
		  text-align: left;
		  padding: 8px;
		}
		
		tr:nth-child(even) {background-color: #f2f2f2;}
		</style>
</head>

<body>

	<!-- for header part -->
	<header>

		<div class="logosec">
			<div class="logo">Dashboard</div>
			<div>
				<a target="_blank" href="./notice/admin/notice.php"><button class="btttn">Create Notice+</button></a>
			</div>
			
		</div>

		
		<a href="Teacher_profile.php"><button class="btn"><i class="fa fa-home"></i></button></a>
		

	</header>

	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">
					<a href="Teacher_profile.php"><div class="nav-option option">
						<img src=
"image/Profil_icon.png"
						    class="nav-img"
						    alt="profile">
						<h3 class="menutext"> Profile</h3>
					</div></a>

					<a href="Teacher_student.php?branch=all"><div class="nav-option option2">
						<img src=
"image/Teacher Student.png"
							class="nav-img"
							alt="articles">
						<h3> Student</h3>
					</div></a>

					<a href="Teacher_result.php"><div class="nav-option option">
						<img src=
"image/Result_icon.png"
							class="nav-img"
							alt="report">
						<h3 class="menutext">Result</h3>
					</div></a>

					<a href="Teacher_fee.php"><div class="nav-option option">
						<img src=
"image/Fees_icon.png"
							class="nav-img"
							alt="institution">
						<h3 class="menutext"> Fees</h3>
					</div></a>

					<a href="Teacher_routine.php"><div class="nav-option option">
						<img src=
"image/Routine_icon.png"
							class="nav-img"
							alt="blog">
						<h3 class="menutext"> Routine</h3>
					</div></a>

					<a href="Teacher_setting.php"><div class="nav-option option">
						<img src=
"image/Setting_icon.png"
							class="nav-img"
							alt="settings">
						<h3 class="menutext"> Settings</h3>
					</div></a>

					<a href="Teacher_logout.php"><div class="nav-option logout">
						<img src=
"image/Logout_icon.png"
							class="nav-img"
							alt="logout">
						<h3 class="menutext">Logout</h3>
					</div></a>

				</div>
			</nav>
		</div>

		<div class="main">
			<div class="box-container">
			<a href="/Sis/Teacher_student.php?branch=IT">
				<div class="srushti box1">
					<div class="text">
						<h2 class="topic-heading1"><?php echo $IT ?></h2>
						<h2 class="topic">IT</h2>
					</div>
				</div></a>
				<a href="/Sis/Teacher_student.php?branch=CS">
				<div class="srushti box2">
					<div class="text">
						<h2 class="topic-heading1"><?php echo $CS ?></h2>
						<h2 class="topic">CS</h2>
					</div>
				</div></a>
				<a href="/Sis/Teacher_student.php?branch=ECS">
				<div class="srushti box3">
					<div class="text">
						<h2 class="topic-heading1"><?php echo $ECS ?></h2>
						<h2 class="topic">ECS</h2>
					</div>
				</div></a>
				<a href="/Sis/Teacher_student.php?branch=EXTC">
				<div class="srushti box4">
					<div class="text">
						<h2 class="topic-heading1"><?php echo $EXTC ?></h2>
						<h2 class="topic">EXTC</h2>
					</div>
				</div></a>
			<div class="box-container">
			<a href="/Sis/Teacher_student.php?branch=CYSE">
			<div class="srushti box5">
					<div class="text">
						<h2 class="topic-heading1"><?php echo $CYSE ?></h2>
						<h2 class="topic">CYSE</h2>
					</div>
			</div></a>
			<a href="/Sis/Teacher_student.php?branch=AIDS">
			<div class="srushti box6">
					<div class="text">
						<h2 class="topic-heading1"><?php echo $AIDS ?></h2>
						<h2 class="topic">AIDS</h2>
					</div>
			</div></a>
			</div>
			<div class="main"> 
				<div class="container_display">
				<div class="report-container">
					<div class="report-header">
					<h1 class="recent-Articles">All Notice</h1>
					
					
                                <form action="" method="GET">
								<input style="display:inline; width:65%;" type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>"  placeholder="Search data">
								<input type="hidden" name="branch" required value="<?php if(isset($_GET['branch'])){echo $_GET['branch']; } ?>" >
                                        <button type="submit" class="view">Search</button>
                                </form>
                           
					<a href="Teacher_student.php?branch=all"><button class="view">View All</button></a>
					</div>
					<div style="overflow-x: auto;">
						<table>

								<tr>
									<th> First</th>
									<th>Last</th>
									<th>Email</th>
									<th>RegNo</th>
									<th>Branch</th>
									<th style="text-align:center">View</th>
								</tr>
								<?php //$res=mysqli_query($con,"SELECT * from student ORDER by Id DESC");
								
								if($_GET['branch'] != null)
									$branch = $_GET['branch'];
									$sqlStudentQuery = "SELECT * from student ORDER by Id DESC";
									if($branch != 'all')
									{
										$sqlStudentQuery = "SELECT * from student where phoneCode2='$branch' ORDER by Id DESC";
										if(isset($_GET['search']))
                                		{
										$filtervalues = $_GET['search'];
										$sqlStudentQuery = "SELECT * from student where phoneCode2='$branch' and CONCAT(email,Fname,Lname,RegNo) LIKE '%$filtervalues%'  ORDER by Id DESC";
										}
									}
									else{
										if(isset($_GET['search']))
                                		{
										$filtervalues = $_GET['search'];
										$sqlStudentQuery = "SELECT * from student where CONCAT(email,Fname,Lname,RegNo) LIKE '%$filtervalues%' ORDER by Id DESC";
										}
									}
									
								
								$resultStudent = mysqli_query($con,$sqlStudentQuery);
								while ($row = mysqli_fetch_array($resultStudent)) { 
										echo 
											'<tr> 
											<td>'.$row['Fname'].'</td> 
											<td>'.$row['Lname'].'</td> 
											<td>'.$row['email'].'</td> 
											<td>'.$row['RegNo'].'</td> 
											<td>'.$row['phoneCode2'].'</td> 
											<td><div class="box box1" style="width:100%;height:10px"><a href="/Sis/TSprofile.php?userid='.$row['UserId'].'"> View Profile</a></div></td> 
											
										</tr>';
								}
								
								?>
					
							</table>
						</div>
					</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- <script src="./index.js"></script> -->
</body>
</html>