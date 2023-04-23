<?php
require("connect.php");
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
	
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	
	$stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        if (password_verify($_POST['password'], $password)) {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            echo 'Welcome ' . $_SESSION['name'] . '!';
            header('Location: home.php');
        } else {
            echo '<div class="login">
                    <p>Incorrect username and/or password!</p>
                  </div>
                  <button type="button" onclick="location.href="index.php";">Go Login</button> 
            ';
        }
    } else {
        echo '<body><div class="login">
        <p>Incorrect username and/or password!</p>
      </div>
      <button type="button" onclick="location.href="index.php";">Go Login</button> 
      </body>';
    }
	$stmt->close();
}

?>
