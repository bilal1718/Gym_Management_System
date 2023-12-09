<?php
session_start();
if (isset($_SESSION['sign'])) 
    $id = $_SESSION['sign'];
    include_once('../Navbar Elements/navbar.php');
    include_once('connect.php');
    $q = "SELECT * FROM signup WHERE id='$id'";
    $run = mysqli_query($connect,$q);
    if ($run && mysqli_num_rows($run) > 0) {
      $row = mysqli_fetch_object($run);
      // Retrieve the user profile information
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/test.css">
	<title>Document</title>
</head>
<body>
<div class="content-start transition">
		<div class="container-fluid dashboard">
			<div class="content-header">
     <?php //if ($row = mysqli_fetch_object($q)); { ?>
				<h4 style="font-size:40px; text-transform: capitalize;">Hi,
				<?php echo $row->user_name; ?></h4>
				<p>Your Profile</p>
        <p><a href="../Detailed Sign-Up Form/basic_information.php"><button style="cursor:pointer; background:blue; color:white;">
        Add Your Information</button></a></p>
			</div>
            <div class="loader-overlay"></div>

	<!-- General JS Scripts -->
	<script src="../assets/js/atrana.js"></script>

	<!-- JS Libraies -->
	<script src="../assets/modules/jquery/jquery.min.js"></script>
	<script src="../assets/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
	<script src="../assets/modules/popper/popper.min.js"></script>
 
    <!-- Template JS File -->
	<script src="../assets/js/script.js"></script>
	<script src="../assets/js/custom.js"></script>
    <?php } ?>
  </body>
</html>