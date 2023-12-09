<?php
session_start();
if(isset( $_SESSION['sign'])){ ?>
<?php include_once('../Dashboard/connect.php'); 
$qb="SELECT * FROM attendence";
$runb=mysqli_query($connect,$qb);
$qa="SELECT * FROM attendence_id";
$runa=mysqli_query($connect,$qa);
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/students.css">
    <link rel="stylesheet" href="../assets/modules/bootstrap-5.1.3/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/modules/fontawesome6.1.1/css/all.css">

    <title>Students List</title>
    <style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>
</head>
<body>
    <?php
    include_once('../Dashboard/connect.php');
    $id= $_SESSION['sign'];
    $q=mysqli_query($connect,"SELECT 
    signup.id,signup.user_name,
    goal_id.goal_name,goal_id.goa_id,goal.user_id,
    goal.goal_id,basic_information.user_id
   FROM signup,goal_id,goal,basic_information 
   WHERE signup.id=basic_information.user_id
    AND signup.id=goal.user_id 
    AND goal.goal_id=goal_id.goa_id
     AND signup.id='$id'");
    ?>
    

    <form action='../Infos/student_info.php' method="POST">
<div class="container">
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <div class="panel">

                <div class="panel-body table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                        
                                <td colspan="5"><input type="text" class="form-control" placeholder="Search Student"></td>
                            </tr>
                            <tr>
                               
                                <th>Student ID</th>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Mark Attendence</th>
                                <th>Motive</th>
                                <th>Submit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $row=mysqli_fetch_object($q); { ?>
                            <tr>                            
                                <td><?php echo $row->user_id ?></td>
                                <td style="text-transform:capitalize; font-size:19px;" ><?php echo $row->user_name ?></td>
                                <td style="font-size:19px;" ><input type='date' name='date'></td>
                                <td>
                                <select name="attendence_id">
                                    
    <option>Attendence</option>
    <?php 
    while($rowa=mysqli_fetch_object($runa)) {  ?>
    	<option value="<?php echo $rowa->attend_id;?>"><?php echo $rowa->attend_name; ?></option> 
      <?php } ?> 
    </select>
 </td>

                                <td style=" font-weight:700;"><?php echo $row->goal_name ?></td>
                                <td>
                        <button class="btn"><i class="fa fa-upload" type='submit' aria-hidden="true"></i></button>
                      </td>
                               
                                <?php } ?>

                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>             
            </div>
        </div>
    </div>
</div>
</form>
</body>
</html>
<?php } else{
	header('location:../Detailed Sign-Up Form/login.php');
} 
?>
