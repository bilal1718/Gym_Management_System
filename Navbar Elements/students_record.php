<?php
session_start();
if(isset($_SESSION['sign'])){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/students.css">
    <link rel="stylesheet" href="../assets/modules/bootstrap-5.1.3/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/modules/fontawesome6.1.1/css/all.css">

    <title>Students Attendence Record</title>
</head>
<body>
    
    <?php
    include_once('../Dashboard/connect.php');
    $id= $_SESSION['sign'];
    $q=mysqli_query($connect,"SELECT signup.id,signup.user_id,
    signup.user_name,
    basic_information.id,
    attendence.user_id,
    attendence_id.attend_name,
    attendence.id,attendence.date,
    attendence_id.attend_id 
    FROM
     signup,basic_information,
     attendence_id,attendence 
     WHERE signup.id=basic_information.id
    AND attendence.user_id=signup.user_id 
    AND attendence.user_id='$id' 
    AND attendence.attendence_id=attendence_id.attend_id");
    ?>
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
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                       <?php 
                        if (mysqli_num_rows($q) > 0) {
                        $row = mysqli_fetch_object($q); { ?>
    <tr>
        <td><?php echo $row->id ?></td>                 
        <td style="text-transform:capitalize; font-size:19px;"><?php echo $row->user_name ?></td>
        <td style="font-size:19px;"><?php echo $row->date ?></td>
        <td style="font-size:19px;"><?php echo $row->attend_name ?></td>
        <td>
            <ul class="action-list">
                <li><a href="../Infos/edit_info.php?id=<?php echo $row->user_id;?>" class="btn btn-primary" target="_parent"><i class="fa fa-pencil-alt"></i></a></li>
                <li><a href="../Infos/delete_info.php?id=<?php echo $row->user_id;?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></li>
            </ul>
        </td>
    </tr>
<?php } }?>


                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>             
            </div>
        </div>
    </div>
</div>


</body>
</html>
<?php } else {
	header('location:../Detailed Sign-Up Form/login.php');
} 
?>
