<?php
if(isset($_SESSION['sign'])){
    $id = $_SESSION['sign'];
    include_once('connect.php');
    // Fetch user profile information using the $user_id
    $q = "SELECT * FROM signup WHERE id='$id'";
    $run = mysqli_query($connect, $q);
    $row = mysqli_fetch_object($run);
    include('dashboard.php');
}else{
    header('location: ../Detailed Sign-Up Form/login.php');
}
?>
