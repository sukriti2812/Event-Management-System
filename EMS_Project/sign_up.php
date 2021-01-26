<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        //this is signup page
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>    
    
    <div class="container my-4">
    <div class="login-box">
        <div class="row">
            <div class="col-md-6 login-left">
            <h2>Sign Up</h2>
            <p>Please fill this form to create an account.</p>
            <form action="" method="post">
            <div class="form-group">
                <label>Student Username</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div> 
            <div class="form-group">
                <label>Student Id</label>
                <input type="" name="roll" id="roll" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Webmail Id</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>   
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="passwd" id="passwd" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>    
</div>

            <div class="col-md-6 login-right">
            <h2>Sign Up</h2>
            <p>Please fill this form to create an account.</p>
            <form action="" method="post">
            <div class="form-group">
                <label>Professor Username</label>
                <input type="text" name="name2" id="name2" class="form-control" required>
            </div> 
            <div class="form-group">
                <label>Professor Id</label>
                <input type="" name="roll2" id="roll2" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Webmail Id</label>
                <input type="email" name="email2" id="email2" class="form-control" required>
            </div>   
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="passwd2" id="passwd2" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit2" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>    
</div>
  </body>
</html>

<?php
    //connection to database
 include 'config.php';

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $roll=$_POST['roll'];
    $email=$_POST['email'];
    $passwd=$_POST['passwd'];

    //query to insert credentials into students table
    $insertquery = " INSERT INTO students(S_username,Student_id,web_mail,PASSWORD) VALUES ('$name','$roll','$email','$passwd')";

    $result=mysqli_query($conn,$insertquery);

    if($result){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your account is now created successfully and you can login
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';    
    }else{
        echo "data not inserted properly";
    }
}

if(isset($_POST['submit2'])){

    $name2=$_POST['name2'];
    $roll2=$_POST['roll2'];
    $email2=$_POST['email2'];
    $passwd2=$_POST['passwd2'];

    //query to insert credentials into professors table
    $insertquery6 = " INSERT INTO professors(P_username,Professor_id,web_mailprof,PASSWORD) VALUES ('$name2','$roll2','$email2','$passwd2')";

    $result2=mysqli_query($conn,$insertquery6);

    if($result2){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your account is now created successfully and you can login
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';    
    }else{
        echo "data not inserted properly";
    }
}
?>
