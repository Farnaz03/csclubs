<html>
<head>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <title>CS Clubs</title>
    <style>
        @media (max-width: 576px)
        {
          nav .container
          {
            width: 100%;
          }
        }
    </style>
</head>
<body>
    <!-- Navbar at top of page -->
    <div class="bg-primary">
      <nav class="mx-5 navbar navbar-light navbar-toggleable-md">
        <a class="navbar-brand text-white" href="index.php">Dashboard</a>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#">Clubs</a>
            <div class="dropdown-menu">
              <a href="robotics.php" class="dropdown-item">Robotics</a>
              <a href="teched.php" class="dropdown-item">Technology Education Revolution</a>
            </div>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white" href="auditlog.php">Audit Log</a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white" href="reports.php">Reports</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link text-white" href="insert.php">Insert</a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white" href="update.php">Update</a>
          </li>
          <li class="nav-item">
              <a class="nav-link text-white" href="delete.php">Delete</a>
          </li>
        </ul>
      </nav>
    </div>

    <br>

    <div class="container" align="center">
      <button class="btn btn-primary"><a class="text-white" href="tablefunctions/ClubInsert.php">Insert into Club</a></button>

      <br><br>

      <button class="btn btn-primary"><a class="text-white" href="tablefunctions/UserAccessInsert.php">Insert into User Access</a></button>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
