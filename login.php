<?php
$user=0;
$succes=0;
 if($_SERVER['REQUEST_METHOD']=='POST') {
        include 'connect.php'; //including connect.php file which have database connection code
        $username=$_POST['email'];
        $passward=$_POST['passward'];
        $sql="SELECT * FROM `signup` WHERE email='$username'and passward='$passward'";
        $result=mysqli_query($conn,$sql);
    if($result){ //checking the user is already exit or not
        $num=mysqli_num_rows($result);
    if($num>0){ //if user is present in database then
        $succes=1;
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['username']=$username;
        header("location: HomePage.php");
        $sql="INSERT INTO `login`(`email`,`passward`) VALUES ('$username','$passward')";
        $result=mysqli_query($conn,$sql);
        }
        else{
            $user=1;
        }
    }
    }
 ?>
 <!-- HTML CODE FOR LOGIN PAGE -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
     <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="container">
    <form class="action" method="POST">
    <h1>  Log in to your Account </h1>
    <hr>
    <h3>New User?<a href="sign.php" target="_main"><i>sign up for a free trial</i></a></h3>
    <br>
    <?php
    if($user){ //if this is true i.e invalid inputs then give error alert
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <big><strong>Error!</strong> Invalid input! Please Try Again.</big><buton type="button"  data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }
?>
<?php
    if($succes){ //if this is true i.e if login details is right then successfully login alert
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong>Login Succesfully <buton type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';}
  ?>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <br>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" autocomplete="off" required>
      </div>
      <BR>
      <div class="mb-3">
        <label for="exampleFormControlInput2" class="form-label">Password</label>
        <br>
        <input type="password" class="form-control" id="exampleFormControlInput2" placeholder="password must be 8-20 characters long, contain letters and numbers" name="passward" autocomplete="off" required column="3">
      </div>
      <br><br>
      <div class="btn-group">
        <button class="btn btn-primary" type="submit">
        <a class="btn btn-primary active" name="login" aria-current="page">Login</a>
</button>
    </div>
</body>
</html>
