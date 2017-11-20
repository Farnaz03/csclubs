<html>
<head>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
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
    <nav class="navbar navbar-light navbar-toggleable-md bg-primary">
        <div class="container">
          <a class="navbar-brand text-white" href="index.php">Dashboard</a>
              <ul class="navbar-nav">

                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#">Clubs</a>
                      <div class="dropdown-menu">
                        <a href="robotics.php" class="dropdown-item">Robotics</a>
                        <a href="teched.php" class="dropdown-item">Technology Education Revolution</a>
                      </div>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white" href="auditlog.html">Audit Log</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white" href="reports.html">Reports</a>
                  </li>
              </ul>
          </div>
    </nav>

    <br>

    <center><img src="img/roboticslogo.jpg" width="20%" /></center>

    <br>

    <h1 class="display-4 text-md-center">Robotics Club</h1>

    <br>
    <br>
    <br>
    <br>
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

    $sql = 'SELECT * FROM student INNER JOIN aremembers ON student.SID = aremembers.SID LIMIT 5';

    $query = mysqli_query($conn, $sql);

    if (!$query) {
    	die ('SQL Error: ' . mysqli_error($conn));
    }
    ?>

    <!-- Members table -->
    <h2 class="display-6 ml-5">Executive Body</h2>

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

    $sql = 'SELECT * FROM student';

    $query = mysqli_query($conn, $sql);

    if (!$query) {
    	die ('SQL Error: ' . mysqli_error($conn));
    }
    ?>

    <!-- Members table -->
    <h2 class="display-6 ml-5">Members</h2>

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
