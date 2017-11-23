<?php
	function insertLogin($userID) {
		$success = false;
		//	Get current date-time in MySQL format
		$nowTimeStamp = date("Y-m-d H:i:s");
		//	Get user's IP address
		$userIP = $_SERVER['REMOTE_ADDR'];

		$insertLogin_SQL = 'INSERT INTO accesslog (
										SID,
										timeLogin,
										IPaddress
									) VALUES (
										'.$SID.',
										"'.$nowTimeStamp.'",
										"'.$userIP.'"
									)';

			if (mysql_query($insertLogin_SQL))  {
				$success = true;
			} else {
				$success = $insertLogin_SQL."<br />".mysql_error();
			}

		return $success;
	}


?>
