<?php
session_start();
unset($_SESSION['sign']);
session_destroy();
header('location:../Detailed Sign-Up Form/login.php');
	?>