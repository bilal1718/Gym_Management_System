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
	<!--Content Start-->
	<?php 
  
 include_once('connect.php');
$id = $_SESSION['sign'];
$q = mysqli_query($connect, "SELECT signup.id,basic_information.user_id,basic_information.father_name,
    basic_information.id_card, basic_information.date_of_birth,
    basic_information.nationality_id, basic_information.district_id,
    basic_information.address, basic_information.religion_id,
    signup.user_name, nationality_id.nat_name,
    district_id.dist_name, religion_id.reli_name
    FROM basic_information, signup, nationality_id, district_id, religion_id 
    WHERE basic_information.user_id = signup.id
    AND basic_information.nationality_id = nationality_id.nat_id
    AND basic_information.district_id = district_id.dist_id
    AND basic_information.religion_id = religion_id.reli_id AND  basic_information.user_id =$id"); ?>
	<div class="content-start transition">
		<div class="container-fluid dashboard">
			<div class="content-header">
     <?php if ($row = mysqli_fetch_object($q)); { ?>
				<h4 style="font-size:40px; text-transform: capitalize;">Hi,
				<?php echo $row->user_name; ?></h4>
				<p>Your Profile</p>
        
			</div>
			<div class="container">

  <div class="card">
    <div class="face face1">
      <div class="content">
        <span class="stars"></span>

<table class="table">
    <tbody style="border:none; color:white;">
	

        <tr>
		
          <th style="border:none; color:yellow;">Name:</th>
            <td style="font-size:20px; text-transform: capitalize;"><b><?php echo $row->user_name;?></b></td>               
        </tr>
		<tr>
		
          <th style="border:none; color:yellow;">Father Name:</th>
            <td style="font-size:20px; text-transform: capitalize;"><b><?php echo $row->father_name;?></b></td>               
        </tr>
		<tr>
		
          <th style="border:none; color:yellow;">Date Of Birth:</th>
            <td style="font-size:20px; text-transform: capitalize;"><b><?php echo $row->date_of_birth;?></b></td>               
        </tr>
		<tr>
		
          <th style="border:none; color:yellow;">CNIC Number:</th>
            <td style="font-size:20px; text-transform: capitalize;"><b><?php echo $row->id_card;?></b></td>               
        </tr>
		<tr>
		
          <th style="border:none; color:yellow;">Nationality:</th>
            <td style="font-size:20px; text-transform: capitalize;"><b><?php echo $row->nat_name;?></b></td>               
        </tr>
		<tr>
		
          <th style="border:none; color:yellow;">District:</th>
            <td style="font-size:20px; text-transform: capitalize;"><b><?php echo $row->dist_name;?></b></td>               
        </tr>
		<tr>
		
          <th style="border:none; color:yellow;">Religion::</th>
            <td style="font-size:20px; text-transform: capitalize;"><b><?php echo $row->reli_name;?></b></td>               
        </tr>
    </tbody>
	<?php } ?>
</table>
      </div>
    </div>
    <div class="face face2">
      <h2>Personal Information</h2>
    </div>
    </div>

<!--body mass index-->
<div class="card">
    <div class="face face1">
      <div class="content">
        <span class="stars"></span>
<?php 
include_once('connect.php');
$id= $_SESSION['sign'];
$qb ="SELECT signup.id,bmi.user_id,bmi.height,bmi.weight
   FROM bmi,signup
   WHERE bmi.user_id=signup.id AND bmi.user_id=$id";
    $result =mysqli_query($connect, $qb);
	$rowb =mysqli_fetch_object($result);
$height = $rowb->height;
$weight = $rowb->weight;
$heightInMeters =($height / 100);
$BMI = $weight / ($heightInMeters * $heightInMeters);
$BMI = number_format($BMI, 2);
$comment = '';
if ($BMI < 18) { 
  $comment = "Underweight";
} elseif ($BMI >= 18 && $BMI < 25) {
  $comment = "Healthy";
} elseif ($BMI >= 25 && $BMI < 30) {
  $comment = "Overweight";
} else {
  $comment = "Obese";
}; { ?>
<table class="table">
        <tbody style="border:none; color:white;">
          <tr>
            <th style="border:none; color:yellow;">HEIGHT:</th>
            <td style="font-size:30px; text-transform: capitalize;">
              <b><?php echo $rowb->height; ?></b>
            </td>               
          </tr>
          <tr>
            <th style="border:none; color:yellow;">WEIGHT:</th>
            <td style="font-size:30px; text-transform: capitalize;">
              <b><?php echo $rowb->weight; ?></b>
            </td>               
          </tr>
          <tr>
            <th style="border:none; color:yellow;">BMI:</th>
            <td id="result" style="font-size:30px; text-transform: capitalize;">
              <b><?php echo $BMI; ?></b>
            </td>
          </tr>
          <tr>
            <td></td>
            <td class="comment" style="font-size:20px; text-transform: capitalize; text-align:left; color:blue;">
              <b>You are <span id="comment"><?php echo $comment; ?></span></b>
            </td>
          </tr>
        </tbody>
		<?php } ?>
      </table>
    </div>
  </div>

    <div class="face face2">
      <h2>Body Mass Index</h2>
    </div>
  </div>

  <div class="card">
    <div class="face face1">
      <div class="content">
        <span class="stars"></span>
		<?php 
		include_once('connect.php');
    $id= $_SESSION['sign'];
		$qt=mysqli_query($connect,"SELECT goal.user_id,goal.goal_id,goal.training_id,goal.fitness_id,
		goal_id.goal_name,training_id.tran_name,fitness_id.fit_name
		FROM goal,goal_id,training_id,fitness_id,signup
		WHERE goal.user_id=signup.id
		AND goal.goal_id=goal_id.goa_id
		AND goal.training_id=training_id.tran_id
		AND goal.fitness_id=fitness_id.fit_id AND goal.user_id=$id");
		?>
		<table class="table">
		<?php if($rowt=mysqli_fetch_object($qt)) { ?>
    <tbody style="border:none; color:white;">
	<tr>
	<th style="border:none; color:yellow;">Your Ambition:</th>
	<td style="font-size:20px; text-transform: capitalize;">
	<b><?php echo $rowt->goal_name;?></b></td>               
    </tr>
	<tr>
	<th style="border:none; color:yellow;">Time Slot:</th>
	<td style="font-size:20px; text-transform: capitalize;">
	<b><?php echo $rowt->tran_name;?></b></td>               
    </tr>
	<tr>
	<th style="border:none; color:yellow;">Fitness Level:</th>
	<td style="font-size:20px; text-transform: capitalize;">
	<b><?php echo $rowt->fit_name;?></b></td>               
    </tr>
			</tbody>
			<?php } else {
	echo "No goal information found.";
} ?>
			</table>
      </div>
    </div>
    <div class="face face2">
      <h2>Training</h2>
    </div>
  </div>
 
<div class="card">
	<?php
	include_once('connect.php');
  $id = $_SESSION['sign'];
	$qa=mysqli_query($connect,"SELECT basic_information.user_id,basic_information.address,signup.user_email,signup.id,signup.contact_number
	FROM basic_information,signup WHERE basic_information.user_id = signup.id AND basic_information.user_id=$id");


	?>
    <div class="face face1">
      <div class="content">
      <?php if ($rowa = mysqli_fetch_object($qa)); { ?>
			<table class="table">
			<tbody style="border:none; color:white;">
			<tr>
	<th style="border:none;"> <i class="fa fa-phone" style="font-size:2rem;"></i></th>
	<td style="font-size:20px; text-transform: capitalize;">
	<b><?php echo $rowa->contact_number;?></b></td>               
    </tr>
	<tr>
	<th style="border:none;"><i class="fas fa-address-card" style="font-size:2rem;"></i></th>
	<td style="font-size:20px; text-transform: capitalize;">
	<b><?php echo $rowa->address;?></b></td>               
    </tr>
	<tr>
	<th style="border:none;"><i class="fa fa-envelope" style="font-size:2rem";></i></i></th>
	<td style="font-size:20px; text-transform: capitalize;">
	<b><?php echo $rowa->user_email;?></b></td>               
    </tr>

<?php } ?>
		</tbody>
		</table>
      </div>
    </div>
    <div class="face face2">
      <h2>Contact Information</h2>
    </div>
  </div>
</div>
</div>

		</div> <!-- End Container -->
	</div><!-- End Content -->


	<!-- Footer -->				
	


	<!-- Preloader -->

	<!-- Loader -->
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
  </body>
</html>
<?php } else{
	header('location:../Detailed Sign-Up Form/login.php');
} 
?>

 
