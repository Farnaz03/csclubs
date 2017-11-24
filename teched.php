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

    <center><img src="img/techedlogo.jpg" width="20%" /></center>

    <br>

    <h1 class="display-4 text-md-center">Technology Education Revolution Club</h1>

    <br>

    <?php
    $db_host = 'localhost'; // Server Name
    $db_user = 'root'; // Username
    $db_pass = ''; // Password
    $db_name = 'csclubs'; // Database Name

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if (!$conn) {
      die ('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    $sql = 'SELECT * FROM aremembers INNER JOIN student ON student.SID = aremembers.SID WHERE CID=2 LIMIT 3';

    $query = mysqli_query($conn, $sql);

    if (!$query) {
      die ('SQL Error: ' . mysqli_error($conn));
    }
    ?>

    <!-- Members table -->
    <h2 class="display-6 ml-5 d-inline">Executive Body</h2>
    <div class="d-inline float-right mr-5">
      <button class="btn btn-link pr-2"><a class="text-success" href="tablefunctions/teched/insert-staff-teched.php">Insert</a></button>
      <button class="btn btn-link pr-2"><a class="text-primary" href="tablefunctions/teched/update-staff-teched.php">Update</a></button>
      <button class="btn btn-link pr-2"><a class="text-danger" href="tablefunctions/teched/delete-staff-teched.php">Delete</a></button>
    </div>

    <div class="container">
      <table class="table table-striped table-bordered">
          <thead>
               <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Role</th>
              </tr>
          </thead>
    <tbody>
    <?php


    while ($row = mysqli_fetch_array($query))
    {
      //$SID  = $row['SID'] == 0 ? '' : number_format($row['SID']);
      echo '<tr>
          <td>'.$row['FirstName'].'</td>
          <td>'.$row['LastName'].'</td>
          <td>'.$row['Email'].'</td>
          <td>'.$row['Role'].'</td>
        </tr>';

    //	$no++;
    }?>
    </tbody>
    <tfoot>
      <tr>
    <!--				<th colspan="4">TOTAL</th>
        <th><?=number_format($total)?></th> -->
      </tr>
    </tfoot>
    </table>
    </div>

    <br>

    <?php
    $db_host = 'localhost'; // Server Name
    $db_user = 'root'; // Username
    $db_pass = ''; // Password
    $db_name = 'csclubs'; // Database Name

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if (!$conn) {
      die ('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    $sql = "SELECT * FROM aremembers INNER JOIN student ON student.SID = aremembers.SID WHERE CID=2 AND aremembers.Role='Member'";

    $query = mysqli_query($conn, $sql);

    if (!$query) {
      die ('SQL Error: ' . mysqli_error($conn));
    }
    ?>

    <!-- Members table -->
    <h2 class="display-6 ml-5 d-inline">Members</h2>
    <div class="d-inline float-right mr-5">
      <button class="btn btn-link pr-2"><a class="text-success" href="tablefunctions/teched/insert-members-teched.php">Insert</a></button>
      <button class="btn btn-link pr-2"><a class="text-primary" href="tablefunctions/teched/update-members-teched.php">Update</a></button>
      <button class="btn btn-link pr-2"><a class="text-danger" href="tablefunctions/teched/delete-members-teched.php">Delete</a></button>
    </div>

    <div class="container">
      <table class="table table-striped table-bordered">
          <thead>
               <tr>
                  <th>SID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Year Of Study</th>
              </tr>
          </thead>
    <tbody>
    <?php


    while ($row = mysqli_fetch_array($query))
    {
      //$SID  = $row['SID'] == 0 ? '' : number_format($row['SID']);
      echo '<tr>
          <td>'.$row['SID'].'</td>
          <td>'.$row['FirstName'].'</td>
          <td>'.$row['LastName'].'</td>
          <td>'.$row['Email'].'</td>
          <td>'.$row['YearOfStudy'].'</td>
        </tr>';

    //	$no++;
    }?>
    </tbody>
    <tfoot>
      <tr>
    <!--				<th colspan="4">TOTAL</th>
        <th><?=number_format($total)?></th> -->
      </tr>
    </tfoot>
    </table>
    </div>

    <div style="margin-top:500px;"></div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
