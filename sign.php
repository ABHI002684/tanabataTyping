<?php
session_start();
$user=0;
$succes=0;
 if($_SERVER['REQUEST_METHOD']=='POST') {
        include 'connect.php'; //including connect.php file
        $Fname=$_POST['Fname'];
        $Lname=$_POST['Lname'];
        $username=$_POST['email'];
        $passward=$_POST['passward'];
        $sql="SELECT * FROM `signup` WHERE email='$username'";
        $result=mysqli_query($conn,$sql);
    if($result){ //checking the user is already exit or not
        $num=mysqli_num_rows($result);
    if($num>0){
        $user=1;
        }
    else{ //inserting data into database
        $sql="INSERT INTO `signup` (`Fname`,`Lname`,`email`, `passward`) VALUES ('$Fname','$Lname','$username', '$passward')";
        $result_in=mysqli_query($conn,$sql);
    if($result_in){ //if data succesfuly inserted
      $succes=1;
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $username;
      header("location: HomePage.php");
        }}}
     else{
        die(mysqli_error($conn)); //connection error
     }}
    
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sign.css">
</head>
<body>
  <div class="container">
   <br>
    <h1>  Sign up </h1>
    <hr>
    <?php
    if($user){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Email already exit! Please try with diffrent email. <buton type="button"  data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }
?>

<?php
    if($succes){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong>Sign-up Succesfuly <buton type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }
  ?>
   <br>
   <form class="action" method="POST">
   <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label"><b>First Name</b></label>
    <br>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="for e.g john" name="Fname" autocomplete="off" required>
  </div>
  <br>
  <div class="mb-3">
    <label for="exampleFormControlInput2" class="form-label"><b>Last Name </b></label>
    <br>
    <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="for e.g yadav" name="Lname" autocomplete="off">
  </div>
  <br>
    <div class="mb-3">
        <label for="exampleFormControlInput3" class="form-label"><b>Create A Email Address</b></label>
        <br>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" autocomplete="off" required>
      </div>
      <br>
      <div class="mb-3">
        <label for="exampleFormControlInput4" class="form-label"><b>Make A Password </b></label>
        <br>
        <input type="password" class="form-control" id="exampleFormControlInput2" placeholder="make a strong password" name="passward" autocomplete="off" required>
      </div>

      <br><br>
      <div class="btn-group">
        <button class="btn btn-primary" type="submit">
        <!--<a href="/First.html"--> <a class="btn btn-primary active" aria-current="page">Sign up</a>
      </button>
    </div>
      </div>
    
</body>
<html>
