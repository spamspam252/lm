<?php

function set_session($username, $password) {
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	$_SESSION['logedIn'] = true;
}

function login($username, $password, $conn)
{
  $query = "SELECT * FROM User WHERE user_id = '$username'";
  $result = $conn->query($query);
  $row = $result->num_rows;
  if ($row > 0) {
		$db_data = $result->fetch_assoc();
		$db_password = $db_data['user_password'];
		$db_id = $db_data['user_id'];
		if (password_verify($password, $db_password)) {
			set_session($username, $password);
			return $db_id;
		} else {
			return false;
		}
	}
}



 ?>
