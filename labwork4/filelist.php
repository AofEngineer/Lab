<?php
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: home.php');
    exit;
}
$dir    = './uploads/';
$path = 'uploads/';
$files = scandir($dir);
$length =  count($files);
?>
<html>
<head>
    <meta charset="utf-8">
    <title>flie list</title>    
</head>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<button type="button" onclick="location.href='upload.php';">Upload</button>
<button type="button" onclick="location.href='home.php';">Logout</button>  
<h1>File list</h1>


   <table style="width:80%">
      <tr>
         <th>flie name</th>
         <th>file date</th>
      </tr>
      <?php
      for ($x = 2; $x<$length; $x++) {
         echo ("<tr>
                  <td> ".$files[$x]."</td>
                  <td>" . date('F d Y H:i:s.', filemtime($path.$files[$x]))."</td>
               </tr>");
      }
      ?>
   </table>



</body>

</html>