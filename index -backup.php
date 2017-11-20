<?php
    //setting up the needed includes files
    require_once("includes/session.php");
    require_once("includes/functions.php");
?>
<?php
    if (isset($_GET['logout'])) {
        session_destroy();
        $message = "You have logged out of the system. Hope to see you again.";
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
            $message = "You have successfully logged in!";
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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> CS Club Database</title>
 <link rel="stylesheet" href="/css/styles.css" />
</head>
<body>
<?php if (!logged_in()){
    // render login screen
    if (isset($_GET['message'])) echo $_GET['message'];
?>
    <div align="center">
        <h1>Welcome to Project-05 CS Club Database</h1>
        <p>To proceed, please login.</p>
        <form action="?login=yes" method="post" enctype="multipart/form-data" name="login" target="_self">
        <label>Username: </label><input name="Username" id="Username" type="text" />
        <label>Password: </label><input name="Password" id="Password" type="Password" />
        <input name="submit" type="submit" value="Login" />
      </form>
    </div>

<?php
} // end if not logged in
    else {
    /// show the user that they have logged in and now can use the app
    if (isset($_GET['message'])) echo $_GET['message'];
    ?>
    Welcome <?php echo $_SESSION['FirstName']; ?> You have logged in as <?php echo $_SESSION['UserType']; ?> | [<a href="?logout=yes">logout</a>]<br />

    <!--here you can place you application content, menu etc... -->
    <hr/>
    <h1>Select you access level from the following:</h1>
    <div>
    	[<a href="data/lecturer.php">Lecturers</a>]
    </div>
    <div>
    	[<a href="#">Do Something Else</a>]
    </div>
    <div>
    	[<a href="#">Do Something Else</a>]
    </div>
<?php
    } // end if successfully logged in...
?>

</body>
</html>
<?php
    } // end if not processing a login request
} // end if not loggin out
?>
