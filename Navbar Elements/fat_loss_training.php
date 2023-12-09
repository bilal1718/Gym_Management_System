<?php
session_start();
if(isset($_SESSION['sign'])){ ?>

<?php 
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
        <li>Running or jogging: 30 minutes</li>
        <li>- Jumping jacks: 3 sets of 30 seconds</li>
        <li>- High knees: 3 sets of 30 seconds</li>
        <li>- Mountain climbers: 3 sets of 30 seconds</li>
        <li>- Burpees: 3 sets of 10 reps</li>
        <li>- Jump rope: 3 sets of 30 seconds</li>
      </ul>
    </div>

    <div class="card-back">
    <figure>
        <div class="img-bg"></div>
        <img src="../Images/pic.jpg">
        <figcaption>TUESDAY</figcaption>
      </figure>

      <ul>
     <li> - Squats: 3 sets of 12 reps</li>
     <li>- Lunges: 3 sets of 12 reps (per leg)</li>
     <li>- Deadlifts: 3 sets of 10 reps</li>
     <li>- Bench press: 3 sets of 12 reps</li>
     <li>- Rows: 3 sets of 12 reps</li>
     <li>- Pull-ups or lat pulldowns: 3 sets of 10 reps</li>

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
        <li>- Stair climbing: 30 minutes</li>
        <li>- Stationary bike: 30 minutes</li>
        <li>- Rowing machine: 30 minutes</li>
        <li>- Sprints: 5 sets of 30 seconds</li>
        <li>- Jumping jacks: 3 sets of 30 seconds</li>
        <li>- High knees: 3 sets of 30 seconds</li>
      </ul>
    </div>

    <div class="card-back">
    <figure>
        <div class="img-bg"></div>
        <img src="../Images/pic.jpg">
        <figcaption>THURSDAY</figcaption>
      </figure>

      <ul>
      <li>- Shoulder press: 3 sets of 12 reps</li>
      <li>- Bicep curls: 3 sets of 12 reps</li>
      <li>- Tricep extensions: 3 sets of 12 reps</li>
      <li>- Leg press: 3 sets of 12 reps</li>
      <li>- Leg curls: 3 sets of 12 reps</li>
      <li>- Crunches or sit-ups: 3 sets of 20 reps</li>
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
      <li>- Swimming: 30 minutes</li>
      <li>- Cycling: 30 minutes</li>
      <li>- Walking: 30 minutes</li>
      <li>- Jumping jacks: 3 sets of 30 seconds</li>
      <li>- High knees: 3 sets of 30 seconds</li>
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
     <h2>REST</h2>
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
