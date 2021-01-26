<Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Event Registration</title>
  </head>
  <body>
      <?php 
        require_once 'partials/nav1.php' 
        ?>
        <div class="container my-4">
    <div class="login-box">
        <div class="row">
            <div class="col-md-6 login-left">
            <h2>Event Registration</h2>
            <p>Please fill this form to register for an event.</p>
<form action="register_process.php" method="post">
  <div class="form-row">

    <div class="col-md-6">
    <label>Student Id</label>
    <input type="text" class="form-control" id="studentid" name="studentid" placeholder="Student Id">
  </div>
      <div class="col-md-6">
      <label>Event Id</label>
      <input type="text" class="form-control" id="eventid" name="eventid" placeholder="Event Id">
    </div>
  	  <div class="col-md-6">
    <label>Registration Id</label>
    <input type="text" class="form-control" id="registerid" name="registerid" placeholder="Registration Id">
    </div>
</div><br>
  <button type="submit" class="btn btn-primary" name="register">Register</button>
</form>
</div>

            <div class="col-md-6 login-right">
            <h2> Search registered events</h2>
            <form action="search_event.php" method="post">
            <div class="form-row">
            <div class="col-md-6">
            <label>Student Name</label>
            <input type="text" class="form-control" name="studentname" id="studentname" placeholder="Student Name">
            </div>
             <div class="col-md-6">
            <label>Event Name</label>
            <input type="text" class="form-control" name="eventname" id="eventname" placeholder="Event Name">
            </div>
          </div><br>
            <button type="submit" class="btn btn-primary" name="search">Search</button>
</form>
</div>   
</div>
  </body>
</html>

