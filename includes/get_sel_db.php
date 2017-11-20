<?php
require("constants.php");

try{
    $db = new PDO("mysql:localhost=" . DB_SERVER . ";dbname=" . DB_NAME , DB_USERNAME, DB_PASSWORD);
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>
