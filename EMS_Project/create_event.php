<Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Create Event</title>
  </head>
  <body>
      <?php 
        require_once 'partials/nav1.php' 
        ?>
        <div class="container my-4">
    <div class="login-box">
        <div class="row">
            <div class="col-md-6 login-left">
            <h2>Create an event</h2>
            <p>Please fill this form to create an event.</p>
             <form action="create_process_stud.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Event Name</label>
      <input type="text" class="form-control" name="eventname" id="eventname" placeholder="Event Name">
    </div>
    <div class="form-group col-md-6">
      <label>Event Id</label>
      <input type="text" class="form-control" name="eventid" id="eventid" placeholder="Event Id">
    </div>
  </div>
  <div class="form-group">
    <label>Event Description</label>
    <input type="text" class="form-control" id="eventdescription" name="eventdescription" placeholder="Event Description">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    <label>Student Id</label>
    <input type="text" class="form-control" name="Studentid" id="Studentid" placeholder="Student Id">
  </div>
 
  <div class="form-group col-md-6">
    <label>Host Organization</label>
    <input type="text" class="form-control" name="hostorg" id="hostorg" placeholder="Host Organization">
    </div>
</div>
  <button type="submit" class="btn btn-primary" name="create">Create</button>
</form>
   </div>
</div>
  </body>
</html>


