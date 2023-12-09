<?php
session_start();
if(isset($_SESSION['sign'])){ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fees Paid</title>
</head>
<body>
    <script>
        alert('Thanks!Your fees has been paid successfully');
    </script>

</body>
</html>
<?php } else{
	header('location:../Detailed Sign-Up Form/login.php');
} 
?>
