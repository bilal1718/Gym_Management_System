
<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Welcome To Our GYM!</title>

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="../assets/modules/bootstrap-5.1.3/css/bootstrap.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="../assets/css/style.css">
	<!-- FontAwesome CSS-->
	<link rel="stylesheet" href="../assets/modules/fontawesome6.1.1/css/all.css">
	<!-- Boxicons CSS-->
	<link rel="stylesheet" href="../assets/modules/boxicons/css/boxicons.min.css">
	<!-- Apexcharts  CSS -->
	<link rel="stylesheet" href="../assets/modules/apexcharts/apexcharts.css">
</head>
<body>
  
  <!--Topbar -->
  <div class="topbar transition">
	<div class="bars">
		<button type="button" class="btn transition" id="sidebar-toggle">
			<i class="fa fa-bars"></i>
		</button>
	</div>
		
	</div>

	<!--Sidebar-->
	<div class="sidebar transition overlay-scrollbars animate__animated  animate__slideInLeft">
        <div class="sidebar-content"> 
        	<div id="sidebar">
			
			<!-- Logo -->


<div class="logo">
	<h2 class="mb-0"><img src="../assets/images/logo.png"> GYM </h2>
	
</div>


            <ul class="side-menu">
                <li>
					<a href="../Dashboard/dashboard.php" class="active">
						<i class='bx bxs-dashboard icon' ></i> Dashboard
					</a>
				</li>
				<li>
                    <a href="../Dashboard/add_profile.php">
						<i class='bx bxs-notepad icon' ></i> 
					 Profile
					</a>
                </li>

<?php
include_once('../Dashboard/connect.php');
$id=$_SESSION['sign'];
$q = "SELECT goal.user_id,goal_id.goal_name,signup.id FROM
 goal, goal_id,signup WHERE
  goal.user_id = signup.id AND goal_id.goa_id=goal.goal_id AND
   goal.user_id = '$id'";
$row=mysqli_query($connect,$q);
if ($row && mysqli_num_rows($row) > 0) {
    $run = mysqli_fetch_object($row);
    $user_goal = $run->goal_name;

if($user_goal == "Fat Loss") {
    $training_plan_href = "../Navbar Elements/fat_loss_training.php";
} else if ($user_goal == "Weight Loss") {
    $training_plan_href = "../Navbar Elements/weight_loss.php";
}else {
    $training_plan_href = "../Navbar Elements/muscle_building_traning.php";
} 
} 
?>
                <li>
                    <a href="<?php echo $training_plan_href; ?>">
						<i class='bx bxs-notepad icon' ></i> 
					 Training Plan
					</a>
                </li>

<?php
include_once('../Dashboard/connect.php');
$id = $_SESSION['sign'];
$q = "SELECT goal.user_id,goal_id.goal_name,signup.id FROM
 goal, goal_id,signup WHERE
  goal.user_id = signup.id AND goal_id.goa_id=goal.goal_id AND
   goal.user_id = '$id'";
$row=mysqli_query($connect,$q);
if ($row && mysqli_num_rows($row) > 0) {
    $run = mysqli_fetch_object($row);
    $user_goal = $run->goal_name;

if($user_goal == "Fat Loss") {
    $diet_plan_href = "../Navbar Elements/fat_loss_diet.php";
} else if ($user_goal == "Weight Loss") {
    $diet_plan_href = "../Navbar Elements/weight_loss_diet.php";
}else {
    $diet_plan_href = "../Navbar Elements/muscle_diet.php";
} 
}
?>
                <li>
				<a href="<?php echo $diet_plan_href; ?>">
						<i class='bx bxs-notepad icon'></i> 
					 Diet Plan
					</a>
                </li>
				<li>
                    <a href="../Navbar Elements/students_list.php">
						<i class='bx bxs-widget icon' ></i> 
						Attendence
					</a>
                </li>
				<li>
                    <a href="../Navbar Elements/invoice.php">
						<i class='bx bxs-widget icon' ></i> 
						Payment
					</a>
                </li>
				<li>
                    <a href="../Detailed Sign-Up Form/logout.php">
						<i class='bx bxs-widget icon' ></i> 
						Log Out
					</a>
                </li>
</ul>
 </div>

       </div> 
	 </div>
	</div>
</body>
</html>