<?php
include("../Dashboard/connect.php");
$q="SELECT * FROM goal";
$run=mysqli_query($connect,$q);
$qg="SELECT * FROM goal_id";
$rung=mysqli_query($connect,$qg);
$qt="SELECT * FROM training_id";
$runt=mysqli_query($connect,$qt);
$qf="SELECT * FROM fitness_id";
$runf=mysqli_query($connect,$qf);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/multi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>What Do You Want?</title>
</head>
<body>
<div id="svg_wrap"></div>
<form action="../Infos/goals_info.php" method="POST">

<section>
  <h2>WHAT DO YOU WANT?</h2>
  <select name="goal_id" class="options">
    <option >Your Goal</option>
    <?php 
    while($rowg=mysqli_fetch_object($rung)) {?>

    	<option value="<?php echo $rowg->goa_id;?>"><?php echo $rowg->goal_name; ?></option> 

      <?php } ?>
    </select>
    <select name="training_id" class="options">
    <option >Training Time</option>
    <?php 
    while  ($rowt=mysqli_fetch_object($runt)) {?>

    	<option value="<?php echo $rowt->tran_id;?>"><?php echo $rowt->tran_name; ?></option> 

      <?php } ?>
    </select>

    <select name="fitness_id" class="options">
    <option >Fitness Level</option>
    <?php 
    while  ($rowf=mysqli_fetch_object($runf)) {?>
    	<option value="<?php echo $rowf->fit_id;?>"><?php echo $rowf->fit_name; ?></option> 

      <?php } ?>
    </select>


</section>
<button class="button" id="prev" onclick="window.location.href='sign-up.php'">&larr; Previous</button>
<button class="button" type="submit" id="next" onclick="window.location.href='condition.php'">Next &rarr;</div>
</form>
</body>
</html>