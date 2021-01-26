<Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Feedback</title>
  </head>
  <body>
      <?php 
        require_once 'partials/nav1.php' 
        ?>
        <div class="container my-4">
        <div class="login-box">
        <div class="row">
            <div class="col-md-6 login-left">
            <h2>Event Feedback</h2>
            <p>Please provide your valuable feedback.</p>
            <form action="feedback_process.php" method="post">
            <div class="form-row">
            <div class="col-md-6">
              <label>Student Id</label>
              <input type="text" class="form-control" name="studentid" id="studentid" placeholder="Student Id">
            </div>
            <div class="col-md-6">
              <label>Event Id</label>
              <input type="text" class="form-control" name="eventid" id="eventid" placeholder="Event Id">
            </div>
      <div>
    <label>Feedback Data</label>
    <input type="text" class="form-control" name="feedback" id="feedback" placeholder="Feedback data">
    </div>
</div><br>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>

            <div class="col-md-6 login-right">
            <h2> Search event feedback</h2>
            <form action="search_feedback.php" method="post">
            <div class="form-row">
            <div class="col-md-6">
            <label>Event Id</label>
            <input type="text" class="form-control" name="eventid" id="eventid" placeholder="Event Id">
            </div>
          </div><br>
            <button type="submit" class="btn btn-primary">Search</button>
</form>
</div>
  </body>
</html>