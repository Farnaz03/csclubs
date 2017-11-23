<?php
include_once "/includes/db_config.php";
if(isset($_POST['btn-save']))
{
 // variables for input data
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $gender = $_POST['gender'];
 $email = $_POST['email'];
 // variables for input data

 // sql query for inserting data into database

 $sql_query = "INSERT INTO students(firstname,lastname,gender,emails) VALUES('$firstname','$lastname','$gender','$email')";
 mysql_query($sql_query);

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

<div id="header">
 <div id="content">
    <label>CRUD Operations With PHP and MySql - By Cleartuts</label>
    </div>
</div>
<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td align="center"><a href="index.php">Back to main page</a></td>
    </tr>
    <tr>
    <td><input type="text" name="firstname" placeholder="First Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="lastname" placeholder="Last Name" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="gender" placeholder="Gender" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="email" placeholder="Email" required /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

<div style="margin-top:500px;"></div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"
integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</center>
</body>
