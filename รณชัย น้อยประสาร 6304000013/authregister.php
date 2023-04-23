<?php 
require ("connect.php");
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {		
    $stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	if ($stmt->num_rows > 0) {
		echo 'Username exists, please choose another!';
	} else {
		if ($stmt = $con->prepare('INSERT INTO accounts (username, password, email) VALUES (?, ?, ?)')) {
			// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
			$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
			$stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
			$stmt->execute();
			echo 'You have successfully registered! You can now login!';
			header('Location: home.php');
		} else {
			// Something is wrong with the SQL statement, so you must check to make sure your accounts table exists with all 3 fields.
			echo 'Could not prepare statement!';
			header('Location: register.php');
		}
       
	}
	$stmt->close();
} else {
	echo 'Could not prepare statement!';
	header('Location: register.php');
}
$con->close();
?>