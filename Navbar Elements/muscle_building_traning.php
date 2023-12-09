<?php
session_start();
if(isset($_SESSION['sign'])){ 
include_once('../Dashboard/connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/training.css">

	<title>Your Training Plan</title>
</head>
<body>
<!-- flip-card-container -->
<div class="flip-card-container" style="--hue: 220">
  <div class="flip-card">

    <div class="card-front">
      <figure>
        <div class="img-bg"></div>
        <img src="../Images/pic.jpg">
        <figcaption>MONDAY</figcaption>
        
      </figure>

      <ul>
        <li>Barbell bench press (3 sets of 8-12 reps)</li>
        <li>Barbell military press (3 sets of 8-12 reps)</li>
        <li>Dumbbell incline press (3 sets of 8-12 reps)</li>
        <li>Dumbbell lateral raises (3 sets of 8-12 reps)</li>
        <li>Dumbbell tricep extensions (3 sets of 8-12 reps)</li>
      </ul>
    </div>

    <div class="card-back">
    <figure>
        <div class="img-bg"></div>
        <img src="../Images/pic.jpg">
        <figcaption>TUESDAY</figcaption>
      </figure>

      <ul>
      <li>Barbell deadlifts (3 sets of 8-12 reps)</li>
      <li>Barbell bent over rows (3 sets of 8-12 reps)</li>
      <li>Lat pulldowns (3 sets of 8-12 reps)</li>
      <li>Dumbbell upright rows (3 sets of 8-12 reps)</li>
      <li>Dumbbell single arm bicep curls (3 sets of 8-12 reps)</li>
      </ul>
    </div>
    </div>

  </div>
</div>
<!-- /flip-card-container -->

<!-- flip-card-container -->
<div class="flip-card-container" style="--hue: 170">
  <div class="flip-card">

    <div class="card-front">
      <figure>
        <div class="img-bg"></div>
        <img src="../Images/pic.jpg">
        <figcaption>WEDNESDAY</figcaption>
      </figure>

      <ul>
        <li>Barbell squats (3 sets of 8-12 reps)</li>
        <li>Bulgarian split squat (3 sets of 8-12 reps)</li>
        <li>Leg press (3 sets of 8-12 reps)</li>
        <li>Leg extensions (3 sets of 8-12 reps)</li>
        <li>Standing calf raises (3 sets of 8-12 reps)</li>
      </ul>
    </div>

    <div class="card-back">
    <figure>
        <div class="img-bg"></div>
        <img src="../Images/pic.jpg">
        <figcaption>THURSDAY</figcaption>
      </figure>

      <ul>
      <li>Push ups (3 sets of 8-12 reps)</li>
    <li> Barbell incline bench press (3 sets of 8-12 reps)</li>
<li>Dumbbell shoulder press (3 sets of 8-12 reps)</li>
<li>Tricep pushdowns (3 sets of 8-12 reps)</li>
      </ul>
    </div>


  </div>
</div>
<!-- /flip-card-container -->

<!-- flip-card-container -->
<div class="flip-card-container" style="--hue: 350">
  <div class="flip-card">

    <div class="card-front">
      <figure>
        <div class="img-bg"></div>
        <img src="../Images/pic.jpg">
        <figcaption>FRIDAY</figcaption>
      </figure>

      <ul>
        <li>Pull ups (3 sets of 8-12 reps)</li>
        <li>Seated cable row (3 sets of 8-12 reps)</li>
        <li>Face pulls (3 sets of 8-12 reps)</li>
        <li>Barbell bicep curl (3 sets of 8-12 reps)</li>
        <li>Barbell good mornings (3 sets of 8-12 reps)</li>
      </ul>
    </div>

    <div class="card-back">
      <!-- only if the image is necessary -->
      <figure>
        <div class="img-bg"></div>
        <img src="../Images/pic.jpg">
        <figcaption>SATURDAY</figcaption>
      </figure>

      <ul>
     <li> Goblet squats (3 sets of 8-12 reps)</li>
     <li>Lunges (3 sets of 8-12 reps)</li>
     <li>Hip thrust (3 sets of 8-12 reps)</li>
     <li>Romanian deadlifts (3 sets of 8-12 reps)</li>
     <li>Glute kickbacks (3 sets of 8-12 reps)</li>
        
      </ul>
    </div>
  </div>
</div>


 
 
<!-- /flip-card-container -->


</body>
</html>
<?php } else{
	header('location:../Detailed Sign-Up Form/login.php');
} 
?>
