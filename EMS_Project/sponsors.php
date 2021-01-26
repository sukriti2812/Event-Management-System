<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Sponsors</title>
  </head>
  <body>
      <?php 
        require_once 'partials/nav1.php' 
        ?>
        <div class="container my-4">
    <div class="login-box">
        <div class="row">
            <div class="col-md-6">
            <h3> Search past sponsors</h3>
            <form action="search.php" method="post">
            <div class="form-row">
            <div class="col-md-6">
              <label>Organization Name</label>
              <input type="text" class="form-control" name="OrganizationName" id="OrganizationName" placeholder="Organization Name">
            </div>
          </div><br>
            <button type="submit" class="btn btn-primary" name="search">Search</button>
</form>
</body>
</html>
