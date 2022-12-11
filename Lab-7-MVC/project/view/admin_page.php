<?php

@include '../model/config.php';

session_start(); 

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   
    <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container">

   <div class="content">
      <h3>Hi Mr, <span>Admin</span></h3>

      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin home page</p>
      
      <br>

      &ensp; 
        <button> <a href="add_student.php"> Add Student </a> </button>         &ensp; &ensp;&ensp;
        <button> <a href="remove_student.php"> Remove Student </a> </button>   &ensp; &ensp; &ensp; &ensp;
        <button> <a href="add_faculty.php">  Faculty Add </a> </button>        &ensp; &ensp;&ensp; &ensp; &ensp; 
        <button> <a href="remove_faculty.php">Faculty Remove </a> </button>    &ensp; &ensp;&ensp; &ensp; &ensp; &ensp;
        <button> <a href="pass_change.php">  Change Password </a> </button>    &ensp; &ensp;&ensp; &ensp; &ensp; &ensp;&ensp;
        <button> <a href="faculty_review.php">Faculty reviews </a> </button>   &ensp; &ensp;&ensp; &ensp; &ensp; &ensp;&ensp;&ensp;
        <br>
        <br>
        <br>
        <br>
           
      
      <a href="profile_edit.php" class="btn"> Edit Profile </a> 
      <br>
      <br>
      <br>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>