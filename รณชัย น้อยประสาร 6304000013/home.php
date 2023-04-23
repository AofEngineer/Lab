<?php
require('connect.php');
if (!isset($_SESSION['loggedin'])) {header('Location: index.php');exit;}?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
	</head>
	<style>
table, th, td {
  border:1px solid black;
}
</style>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Website Title</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="register.php"><i class="fas fa-user-circle"></i>Add User</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome back, <?=$_SESSION['name']?>!</p>			
		</div>
		<table style="width:80% container" class="content">
      <tr>
         <th>Id</th>
         <th>Username</th>
		 <th>Password</th>
		 <th>Email</th>
      </tr>
      <?php
	  $sql = "SELECT * FROM accounts";
	  $result = $con->query($sql);
	  
	  if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo ("<tr>
                  <td> ".$row["id"]."</td>
                  <td>" . $row["username"]."</td>
				  <td>" . $row["password"]."</td>
				  <td>" . $row["email"]."</td>
               </tr>");
		 
		}
	  } else {
		echo "0 results";
	  }
	  $con->close();
	  
      /*for ($x = 2; $x<$length; $x++) {
         echo ("<tr>
                  <td> ".$files[$x]."</td>
                  <td>" . date('F d Y H:i:s.', filemtime($path.$files[$x]))."</td>
               </tr>");
      }*/
      ?>
   </table>
	</body>
</html>