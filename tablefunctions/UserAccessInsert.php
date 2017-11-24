<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'csclubs'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
  die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if(isset($_POST['btn-save']))
{
 // variables for input data
 $name = $_POST['UserType'];
 //$lme = $_POST['AccessLevel'];
// $gender = $_POST['Gender'];
// $email = $_POST['Email'];
 // variables for input data

 // sql query for inserting data into database

 $sql_query = "INSERT INTO user_access (UserType,AccessLevel) VALUES('$name')";
 mysqli_query($conn, $sql_query);

 // sql query for inserting data into database

}
?>

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
<center>
  <br>
  <button align="center" class="btn btn-primary btn-small"><a class="text-white" href="../index.php">Main Page</a></button>
  <br><br>
<div class="row row-md-5 align-items-center">
<div class="container" align="center">
  <div class="col-3 col-md-4">
    <form method="post">
      <table class="table" align="center">
        <thead>
          <h2>Insert into: User Access</h2>
        </thead>
      <tr>
        <td align="center">
          <input class="form-control" type="text" name="UserType" placeholder="User Type" required />
        </td>
      </tr>
      <tr>
  <!--     <td align="center">
          <input class="form-control" type="text" name="AccessLevel" placeholder="Level " required />
        </td>
      </tr>
      <tr>
         <td align="center">
          <input class="form-control" type="text" name="Gender" placeholder="Gender" required />
        </td>
      </tr>
      <tr>
        <td align="center">
          <input class="form-control" type="text" name="Email" placeholder="Email" required />
        </td>
      </tr>
      <tr> -->
        <td align="center">
          <button class="btn btn-success" type="submit" name="btn-save" align="center"><strong>SAVE</strong></button>
        </td>
      </tr>
      </table>
    </form>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"
integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</center>
</body>
