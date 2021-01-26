<?php
  session_start();
  $message="";
  if(count($_POST)>0) {
  include_once 'config.php';
  $result = mysqli_query($conn,"SELECT * FROM students WHERE S_username='" . $_POST["name"] . "' and password = '". $_POST["passwd"]."'");
  $row  = mysqli_fetch_array($result);
  if(is_array($row)) {
  $_SESSION["id"] = $row['id'];
  $_SESSION["name"] = $row['name'];
  } else {
    $message = "Invalid Username or Password!";
  }
  }
  if(isset($_SESSION["id"])) {
  header("Location:welcome2.php");
  }
  if(count($_POST)>0) {
  include_once 'config.php';
  $res = mysqli_query($conn,"SELECT * FROM professors WHERE P_username='" . $_POST["name1"] . "' and password = '". $_POST["passwd1"]."'");
  $row1 = mysqli_fetch_array($res);
  if(is_array($row1)) {
  $_SESSION["id"] = $row1['id'];
  $_SESSION["name"] = $row1['name'];
  } else {
    $message = "Invalid Username or Password!";
  }
  }
  if(isset($_SESSION["id"])) {
  header("Location:welcome2.php");
}
?>

<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
      <?php 
        require_once 'partials/nav.php' 
      ?>

        <div class="container my-4">
    <div class="login-box">
        <div class="row">
            <div class="col-md-6 login-left">
            <h2>Login as a student</h2>
            <p>Please fill this form to login to your account.</p>
            <form action="welcome2.php" method="post">
            <div class="form-group col-md-6">
                <label>Student Username</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>    
            <div class="form-group col-md-6">
                <label>Password</label>
                <input type="password" name="passwd" id="passwd" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="Login">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Not yet signed up? <a href="sign_up.php">Sign Up here</a>.</p>
        </form>    
</div>

            <div class="col-md-6 login-right">
            <h2>Login as a Professor</h2>
            <p>Please fill this form to login to your account.</p>
            <form action="Welcome_Professor.php" method="post">
            <div class="form-group col-md-6">
                <label>Professor Username</label>
                <input type="text" name="name1" id="name" class="form-control" required>
            </div>  
            <div class="form-group col-md-6">
                <label>Password</label>
                <input type="password" name="passwd1" id="passwd" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit1" class="btn btn-primary" value="Login">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Not yet signed up? <a href="sign_up.php">Sign Up here</a>.</p>
        </form>    
</div>
</body>
</html>

<?php
  include 'config.php';

  if(isset($_POST['submit'])){

    $login = false;
    $showerror = false;
    $name=$_POST['name'];
    $passwd=$_POST['passwd'];
    //query to login as a student
    $searchquery = " SELECT * from students where S_username='$name' AND PASSWORD='$passwd'";

    $result=mysqli_query($conn,$searchquery);
    $num=mysqli_num_rows($result);

    if($num ==1){
        echo "Logged in successfully!";
    }
    else{
        $showerror = "Invalid credentials";
    }
}

  if(isset($_POST['submit1'])){

    $login = false;
    $showerror = false;
    $name=$_POST['name1'];
    $passwd=$_POST['passwd1'];
      //query to login as a professor
    $searchquery1 = " SELECT * from professors where P_username='$name1' AND PASSWORD='$passwd1'";

    $result=mysqli_query($conn,$searchquery1);
    $num=mysqli_num_rows($result);

    if($num ==1){
        echo "Logged in successfully!";
    }
    else{
        $showerror = "Invalid credentials";
    }
}
?>