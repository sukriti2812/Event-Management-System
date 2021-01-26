<?php
    require_once 'config.php';
?>

<Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Room Booking</title>
  </head>
  <body>
      <?php 
        require_once 'partials/nav1.php' 
        ?>
        <div class="container my-4">
        <div class="login-box">
        <div class="row">
            <div class="col-md-6 login-left">
            <h2>Room Booking</h2>
            <p>Please fill this form to book rooms for events.</p>
<form action="book_process.php" method="post">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Room Id</label>
            <input type="text" class="form-control" name="roomid" id="roomid" placeholder="Room Id">
          </div>
          <div class="form-group col-md-6">
            <label>H1 Date</label>
            <input type="Date" class="form-control" name="eventdate" id="eventdate" placeholder="Event Date">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>H1_Start_Time</label>
            <input type="time" class="form-control" name="H1_Start_Time" id="H1_Start_Time" placeholder="Start Time">
          </div>
          <div class="form-group col-md-6">
            <label>H1_End_Time</label>
            <input type="time" class="form-control" name="H1_End_Time" id="H1_End_Time" placeholder="End Time">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Event Id</label>
            <input type="text" class="form-control" name="eventid" id="eventid">
          </div>
        </div>
        <button type="submit" class="btn btn-primary" name="book">Book Now</button>
</form>
          <div class="login-right">
            <h2> Search room availability</h2>
<form action="search_room.php" method="post">
            <div class="form-row">
            <div class="col-md-6">
              <label>H1_Date</label>
              <input type="Date" class="form-control" name="HDate" id="HDate" placeholder="Enter H1_Date">
            </div>
            </div><br>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" name="search" id="search" >Search</button>
</form>
</div>
  </body>
</html>
