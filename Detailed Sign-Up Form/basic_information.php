<?php
include("../Dashboard/connect.php");

$q="SELECT * FROM basic_information";
$run=mysqli_query($connect,$q);
$qn="SELECT * FROM nationality_id";
$runn=mysqli_query($connect,$qn);
$qd="SELECT * FROM district_id";
$rund=mysqli_query($connect,$qd);
$qr="SELECT * FROM religion_id";
$runr=mysqli_query($connect,$qr);

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
    <title>Document</title>
</head>
<body>
    <div id="svg_wrap"></div>

    <form action="../Infos/basic_info.php" method="POST">
<section>
  <h2>BASIC INFORMATION</h2>
  <input type="text" name="father_name" placeholder="Father Name" required/>
  <input type="tel" name="id_card" placeholder="ID Card Number" required />
  <input type="date" name="date_of_birth" required/>
  
  <select name="nationality_id" class="options">
    <option >Select Nationality</option>
    <?php 
    while  ($rown=mysqli_fetch_object($runn)) {?>

    	<option value="<?php echo $rown->nat_id;?>"><?php echo $rown->nat_name; ?></option> 

      <?php } ?>
    </select>
  
    <select name="district_id" class="options">
    <option>Select District</option>
    <?php 
    while  ($rowd=mysqli_fetch_object($rund)) {?>

    	<option value="<?php echo $rowd->dist_id;?>"><?php echo $rowd->dist_name; ?></option> 

      <?php } ?>
    </select>

    <select name="religion_id" class="options">
    <option>Select Religion</option>
    <?php 
    while  ($rowr=mysqli_fetch_object($runr)) {?>

    	<option value="<?php echo $rowr->reli_id;?>"><?php echo $rowr->reli_name; ?></option> 

      <?php } ?>
    </select>
  


  <textarea name="address" placeholder="Address"></textarea>
</section>

<button class="button" type="submit" id="next" onclick="window.location.href='BMI.php'">Next &rarr;</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</form>

</body>
</html>

