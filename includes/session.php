<?php
    session_start();
    function logged_in() {
        return isset($_SESSION['logged_in_FirstName_SID']);
    }
?>