<?php
session_start();
if(isset($_SESSION['sign'])){
include_once('../Navbar Elements/navbar.php'); 
 include_once('../Dashboard/connect.php');
$qi=mysqli_query($connect,"SELECT * FROM payment");
$runi=mysqli_fetch_object($qi);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/invoice.css">
    <title>INVOICE</title>
</head>
<body>
   <?php include_once("../Dashboard/connect.php");
   $id= $_SESSION['sign'];
   $q=mysqli_query($connect,"SELECT signup.id,goal.user_id,signup.user_id,signup.user_name,basic_information.user_id,basic_information.id,basic_information.address,goal.id,goal.goal_id,goal_id.goal_name,goal_id.goa_id 
   FROM signup,basic_information,goal,goal_id
   WHERE signup.user_id=goal.user_id AND goal.goal_id=goal_id.goa_id AND 
   signup.user_id=basic_information.user_id AND goal.user_id=$id");
   ?>
<form action="../Infos/invoice_info.php" method="POST">
<main class="ticket-system">
    <div class="top">
    <div class="printer">
    </div>
    <div class="receipts-wrapper">
       <div class="receipts">
          <div class="receipt">
             <svg class="airliner-logo" viewBox="0 0 403 94" xmlns="http://www.w3.org/2000/svg" xmlns:serif="http://www.serif.com/" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414">
                <path d="M402.772 59.544c0-13.172-9.632-16.649-21.203-20.114-5.601-1.644-10.58-3.115-10.58-7.98 0-4.271 4.319-5.691 7.571-5.691 2.738 0 7.917.578 8.342 6.918h14.702c-.252-12.098-10.128-17.364-22.78-17.364-7.835 0-14.34 2.226-18.431 6.246-2.835 2.808-4.578 6.922-4.578 11.209 0 11.122 7.418 15.579 15.823 18.123 9.431 2.879 15.669 4.606 15.669 9.801 0 3.462-2.741 6.927-8.161 6.927-6.914 0-9.415-4.118-9.581-8.165h-14.843c0 13.757 11.587 18.803 24.424 18.803 16.37 0 23.626-9.321 23.626-18.713m-53.36 0c0-13.172-9.584-16.649-21.171-20.114-5.585-1.644-10.6-3.115-10.6-7.98 0-4.271 4.338-5.691 7.587-5.691 2.757 0 7.913.578 8.326 6.918h14.675c-.244-12.098-10.073-17.364-22.749-17.364-7.839 0-14.348 2.226-18.415 6.246-2.831 2.808-4.582 6.922-4.582 11.209 0 11.122 7.418 15.579 15.835 18.123 9.415 2.879 15.673 4.606 15.673 9.801 0 3.462-2.745 6.927-8.169 6.927-6.922 0-9.431-4.118-9.581-8.165h-14.835c0 13.757 11.586 18.803 24.416 18.803 16.326 0 23.59-9.321 23.59-18.713m-166.379 0c0-11.453-6.077-15.288-19.366-19.622-6.266-2.037-12.106-3.607-12.106-8.472 0-4.271 4.338-5.691 7.587-5.691 2.749 0 7.929.578 8.349 6.918h14.659c-.252-12.098-10.088-17.364-22.749-17.364-7.846 0-14.328 2.226-18.418 6.246-2.844 2.808-4.578 6.922-4.578 11.209 0 11.122 7.425 15.579 15.814 18.123 9.44 2.879 15.678 4.606 15.678 9.801 0 3.462-2.75 6.927-8.181 6.927-6.891 0-9.404-4.118-9.561-8.165h-14.844c0 13.757 11.603 18.803 24.405 18.803 16.349 0 23.311-9.321 23.311-18.713m74.787-42.843l-9.978 40.035-11.689-40.035h-14.981l-11.681 40.035-10.006-40.035h-15.162l16.491 59.739h16.02l11.822-40.966 11.827 40.966h16l16.542-59.739H257.82zm36.723 59.739h-15.516V16.701h15.516V76.44zM102.141 93.347H0L74.861 0h50.276l-22.996 93.347z" fill="#dc2f34"/>
                <path d="M86.514 38.058V17.96H69.291v20.098H49.193v17.223h20.079v20.106h17.23V55.281h20.11V38.058H86.514z" fill="#fff"/>
             </svg>

             <div class="route">
                <h2>USER</h2>
                <svg class="plane-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 510 510">
                   <path fill="#3f32e5" d="M497.25 357v-51l-204-127.5V38.25C293.25 17.85 275.4 0 255 0s-38.25 17.85-38.25 38.25V178.5L12.75 306v51l204-63.75V433.5l-51 38.25V510L255 484.5l89.25 25.5v-38.25l-51-38.25V293.25l204 63.75z"/>
                </svg>
                <h2>FEES</h2>
             </div>
             <?php $row=mysqli_fetch_object($q); { ?>
             <div class="details">
                <div class="item">
                   <span>ID</span>
                   <h3><?php echo $row->user_id ?></h3>
                </div>
                <div class="item">
                   <span>FEES</span>
                   <h3><input type="number" name="pay_amount"></h3>
                </div>

                <div class="item">
                   <span>NAME</span>
                   <h3 style="text-transform: capitalize;"><?php echo $row->user_name ?></h3>
                </div>
                <div class="item">
                   <span>MONTH</span>
                   <h3><select name="month">
    <option>January</option>
    <option>Feburary</option>
    <option>March</option>
    <option>April</option>
    <option>May</option>
    <option>June</option>
    <option>July</option>
    <option>August</option>
    <option>September</option>
    <option>October</option>
    <option>November</option>
    <option>December</option>
  </select></h3>
                </div>
                <div class="item">
                   <span>MOTIVE</span>
                   <h3><?php echo $row->goal_name ?></h3>
                </div>
                <div class="item">
                   <span>ADDRESS</span>
                   <h3 style="text-transform: capitalize;"><?php echo $row->address ?></h3>
                </div>
             </div>
             <div>
               <button type="submit">SUBMIT</button>
             </div>
<?php } ?>
          </div>
          
       </div>
    </div>
 </main>
             </form>
</body>
</html>
<?php } else{
	header('location:../Detailed Sign-Up Form/login.php');
} 
?>
