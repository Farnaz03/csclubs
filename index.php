<?php
    //setting up the needed includes files
    require_once("includes/session.php");
    require_once("includes/functions.php");
?>
<?php
    if (isset($_GET['logout'])) {
        session_destroy();
        $message = "You have logged out of the system.";
        print "<meta http-equiv=\"refresh\" content=\"0;URL=?message={$message}\">";
    } else {
?>
<?php
    if (isset($_GET['login']))  {
        // process the login request
        if (isset($_POST['Username'])) $Username = $_POST['Username'];
        if (isset($_POST['Password']))  $Password = MD5($_POST['Password']);

        $result = query("SELECT * FROM student WHERE Username = '{$Username}' AND Password = '{$Password}' LIMIT 1");


        if (!empty($result)) {
            // user is authenticated
            $user = $result[0];
            $_SESSION['logged_in_FirstName_SID'] = $user['SID'];
            $_SESSION['FirstName'] = $user['FirstName'];
            $_SESSION['UserType'] = $user['UserType'];

            // bounce to the index file with message
            $message = "";
            print "<meta http-equiv=\"refresh\" content=\"0;URL=?message={$message}\">";
        } else {

            // bounce to the index file with a message
            $message = "Please check your username and password and try again";
            print "<meta http-equiv=\"refresh\" content=\"0;URL=?message={$message}\">";
        }
    }
        else {
        //render the document
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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


<?php if (!logged_in()){
    // render login screen
    if (isset($_GET['message'])) echo $_GET['message'];
?>
    <h3 class="text-center">Department of Computer Science</h3>
    <h3 class="text-center">Computer Science Clubs Database</h3>
    <br/>
        <form action="?login=yes" method="post" enctype="multipart/form-data" name="login" target="_self">
        <div class="container center">
        <div class="form-group">
        <label for="Username">Username</label>
            <input class="form-control" name="Username" type="text" id="Username">
            </div>
        <div class="form-group">
       <label for="Password">Password</label>
       <input class="form-control" name="Password" type="Password" id="password" >
     <!--   <input name="submit" type="submit" value="Login" /> -->
           <!--  <button class="btn btn-primary"name="submit" type="submit">login</button> -->
      </form>
    </div>
             <button class="btn btn-primary"name="submit" type="submit">login</button>
   </div>


<?php
} // end if not logged in
    else {
    /// show the user that they have logged in and now can use the app
    if (isset($_GET['message'])) echo $_GET['message'];
    ?>
    Welcome, <?php echo $_SESSION['FirstName']; ?> <p class="text-danger d-inline pr-2">[<?php echo $_SESSION['UserType']; ?>]</p>
    <a href="?logout=yes"><button class="btn btn-sm btn-danger" name="submit" type="submit">logout</button></a>

    <!--here you can place you application content, menu etc... -->
   <head>
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
    <br>
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
                      <a class="nav-link text-white" href="auditlog.php">Audit Log</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white" href="reports.php">Reports</a>
                  </li>
              </ul>
          </div>
    </nav>

    <br>

    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="card" style="width:20rem">
            <img class="card-img-top" src="img/roboticslogo.jpg" alt="Robotics Club Logo">
            <div class="card-block">
              <h4 class="card-title">Robotics Club</h4>
              <p class="card-text">The UG Robotics Club exists in order to build and promote the awareness of robotics technology and robotics-related issues for enhancing society.</p>
              <a class="btn btn-success btn-block" href="robotics.php">More...</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card" style="width:20rem">
            <img class="card-img-top" src="img/techedlogo.jpg" alt="TechEdRev Club Logo">
            <div class="card-block">
              <h4 class="card-title">Technology Education Revolution Club</h4>
              <p class="card-text">The CS Tech-ED Revolution Club exists in order to promote the awareness of the applications and benefits of Computer Science and related for enhancing society.</p>
              <a class="btn btn-success btn-block" href="teched.php">More...</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card" style="width:20rem">
            <img class="card-img-top" src="img/cybersecuritylogo.jpg" alt="Robotics Club Logo">
            <div class="card-block">
              <h4 class="card-title">CyberSecurity Club</h4>
              <p class="card-text">The CS Tech-ED Revolution Club exists in order to promote the awareness of the applications and benefits of Computer Science and related for enhancing society.</p>
              <a class="btn btn-success btn-block" href="cybersecurity.php">More...</a>
            </div>
          </div>
        </div>
      </div>
    </div>


<?php
    } // end if successfully logged in...
?>
  <div style="margin-top:500px;"></div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>

<?php
    } // end if not processing a login request
} // end if not loggin out
?>
