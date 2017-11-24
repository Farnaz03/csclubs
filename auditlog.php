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
    
    <h1 class="display-1 text-md-center">Audit Log</h1>
    <br>
    <tbody>

     <?php
    $db_host = 'localhost'; // Server Name
    $db_user = 'root'; // Username
    $db_pass = ''; // Password
    $db_name = 'csclubs'; // Database Name

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if (!$conn) {
    	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    $sql = 'SELECT * FROM history_lecturer';

    $query = mysqli_query($conn, $sql);

    if (!$query) {
    	die ('SQL Error: ' . mysqli_error($conn));
    }
    ?>
    <h2 class="display-6 ml-5">Lecturer Table History</h2>

        <div class="container">
     <table class="table table-striped table-bordered">
          <thead>
               <tr>
                   <th>LID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                   <th>Gender</th>
                  <th>Email</th>
                   <th>Contact Number</th>
                   <th>Username</th>
                   <th>Password</th>
                   <th>Modified on</th>
              </tr>
          </thead>
    <tbody>
    <?php

    while ($row = mysqli_fetch_array($query))
    {
          echo '<tr>
          <td>'.$row['LID'].'</td>
          <td>'.$row['FirstName'].'</td>
          <td>'.$row['LastName'].'</td>
          <td>'.$row['Gender'].'</td>
           <td>'.$row['Email'].'</td>
            <td>'.$row['ContactNumber'].'</td>
             <td>'.$row['Username'].'</td>
              <td>'.$row['Password'].'</td>
               <td>'.$row['Time_his'].'</td>
        </tr>';

   	}?>
        </tbody>
 		<tfoot>

 		</tfoot>
 	</table>
    </div>
<br>
        <br>


    <tbody>

     <?php
    $db_host = 'localhost'; // Server Name
    $db_user = 'root'; // Username
    $db_pass = ''; // Password
    $db_name = 'csclubs'; // Database Name

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if (!$conn) {
    	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    $sql = 'SELECT * FROM student_history';

    $query = mysqli_query($conn, $sql);

    if (!$query) {
    	die ('SQL Error: ' . mysqli_error($conn));
    }
    ?>
    <h2 class="display-6 ml-5">Student Table History</h2>

        <div class="container">
     <table class="table table-striped table-bordered">
          <thead>
               <tr>
                   <th>SID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                    <th>Date Of Birth</th>
                   <th>Gender</th>
                  <th>Email</th>
                   <th>Contact Number</th>
                   <th>Username</th>
                   <th>Password</th>
                  <th>User Type</th>
                   <th>Year Of Study</th>
                   <th>USI</th>
                   <th>Modified on</th>
              </tr>
          </thead>
    <tbody>
    <?php

    while ($row = mysqli_fetch_array($query))
    {
          echo '<tr>
          <td>'.$row['SID'].'</td>
          <td>'.$row['FirstName'].'</td>
          <td>'.$row['LastName'].'</td>
         <td>'.$row['DOB'].'</td>'.'</td>
          <td>'.$row['Gender'].'</td>
           <td>'.$row['Email'].'</td>
            <td>'.$row['ContactNumber'].'</td>
             <td>'.$row['Username'].'</td>
              <td>'.$row['Password'].'</td>
               <td>'.$row['UserType'].'</td>
               <td>'.$row['YearOfStudy'].'</td>
               <td>'.$row['USI'].'</td>
               <td>'.$row['Time_his'].'</td>
        </tr>';

   	}?>
        </tbody>
 		<tfoot>

 		</tfoot>
 	</table>
    </div>

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

    $sql = 'SELECT * FROM aremembers_history';

    $query = mysqli_query($conn, $sql);

    if (!$query) {
    	die ('SQL Error: ' . mysqli_error($conn));
    }
    ?>
    <h2 class="display-6 ml-5">Are Members Relationship Table History</h2>

        <div class="container">
     <table class="table table-striped table-bordered">
          <thead>
               <tr>
                   <th>SID</th>
                   <th>MID</th>
                  <th>CID</th>
                   <th>Role</th>
                   <th>Modified on</th>
              </tr>
          </thead>
    <tbody>
    <?php

    while ($row = mysqli_fetch_array($query))
    {
          echo '<tr>
          <td>'.$row['SID'].'</td>
          <td>'.$row['MID'].'</td>
          <td>'.$row['CID'].'</td>
         <td>'.$row['Role'].'</td>'.'</td>
          <td>'.$row['Time_his'].'</td>
        </tr>';

   	}?>
        </tbody>
 		<tfoot>

 		</tfoot>
 	</table>
    </div>

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

    $sql = 'SELECT * FROM clubs_history';

    $query = mysqli_query($conn, $sql);

    if (!$query) {
    	die ('SQL Error: ' . mysqli_error($conn));
    }
    ?>
    <h2 class="display-6 ml-5">Clubs Table History</h2>

        <div class="container">
     <table class="table table-striped table-bordered">
          <thead>
               <tr>
                   <th>CID</th>
                  <th>Name</th>
                   <th>Modified on</th>
              </tr>
          </thead>
    <tbody>
    <?php

    while ($row = mysqli_fetch_array($query))
    {
          echo '<tr>
          <td>'.$row['CID'].'</td>
          <td>'.$row['Name'].'</td>
        <td>'.$row['Time_his'].'</td>
        </tr>';

   	}?>
        </tbody>
 		<tfoot>

 		</tfoot>
 	</table>
    </div>

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

    $sql = 'SELECT * FROM coordinate_history';

    $query = mysqli_query($conn, $sql);

    if (!$query) {
    	die ('SQL Error: ' . mysqli_error($conn));
    }
    ?>
    <h2 class="display-6 ml-5">Coordinate Relationship Table History</h2>

        <div class="container">
     <table class="table table-striped table-bordered">
          <thead>
               <tr>
                   <th>CID</th>
                  <th>COID</th>
                  <th>LID</th>
                    <th>Role</th>
                   <th>Modified on</th>
              </tr>
          </thead>
    <tbody>
    <?php

    while ($row = mysqli_fetch_array($query))
    {
          echo '<tr>
          <td>'.$row['CID'].'</td>
          <td>'.$row['COID'].'</td>
          <td>'.$row['LID'].'</td>
         <td>'.$row['Role'].'</td>'.'</td>
               <td>'.$row['Time_his'].'</td>
        </tr>';

   	}?>
        </tbody>
 		<tfoot>

 		</tfoot>
 	</table>
    </div>


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

    $sql = 'SELECT * FROM have_history';

    $query = mysqli_query($conn, $sql);

    if (!$query) {
    	die ('SQL Error: ' . mysqli_error($conn));
    }
    ?>
    <h2 class="display-6 ml-5">Have Relationship Table History</h2>

        <div class="container">
     <table class="table table-striped table-bordered">
          <thead>
               <tr>
                   <th>SID</th>
                  <th>HID</th>
                  <th>IID</th>
                   <th>Modified on</th>
              </tr>
          </thead>
    <tbody>
    <?php

    while ($row = mysqli_fetch_array($query))
    {
          echo '<tr>
          <td>'.$row['SID'].'</td>
          <td>'.$row['HID'].'</td>
          <td>'.$row['IID'].'</td>
         <td>'.$row['Time_his'].'</td>
        </tr>';

   	}?>
        </tbody>
 		<tfoot>

 		</tfoot>
 	</table>
    </div>

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

    $sql = 'SELECT * FROM interests_history';

    $query = mysqli_query($conn, $sql);

    if (!$query) {
    	die ('SQL Error: ' . mysqli_error($conn));
    }
    ?>
    <h2 class="display-6 ml-5">Interest Relationship Table History</h2>

        <div class="container">
     <table class="table table-striped table-bordered">
          <thead>
               <tr>
                   <th>IID</th>
                  <th>Name</th>
                   <th>Modified on</th>
              </tr>
          </thead>
    <tbody>
    <?php

    while ($row = mysqli_fetch_array($query))
    {
          echo '<tr>
          <td>'.$row['IID'].'</td>
          <td>'.$row['Name'].'</td>
         <td>'.$row['Time_his'].'</td>
        </tr>';

   	}?>
        </tbody>
 		<tfoot>

 		</tfoot>
 	</table>
    </div>

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

    $sql = 'SELECT * FROM user_access_history';

    $query = mysqli_query($conn, $sql);

    if (!$query) {
    	die ('SQL Error: ' . mysqli_error($conn));
    }
    ?>
    <h2 class="display-6 ml-5">User Access Relationship Table History</h2>

        <div class="container">
     <table class="table table-striped table-bordered">
          <thead>
               <tr>
                   <th>UAID</th>
                  <th>User Type</th>
                   <th>Modified on</th>
              </tr>
          </thead>
    <tbody>
    <?php

    while ($row = mysqli_fetch_array($query))
    {
          echo '<tr>
          <td>'.$row['UAID'].'</td>
          <td>'.$row['UserType'].'</td>
         <td>'.$row['Time_his'].'</td>
        </tr>';

   	}?>
        </tbody>
 		<tfoot>

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
