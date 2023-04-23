<form method="post">
 Enter number of rows <input name="rows" type="text" size="4"> and columns <input name="columns" type="text" size="4"> <input type="submit" name="submit" value="Draw Table">
</form>
<?php
if (isset($_POST['submit'])) {
 echo "<table width = 90% border = '1' cellspacing = '5' cellpadding = '0'>";
 // set variables from form input
 $rows = $_POST['rows'];
 $columns = $_POST['columns'];

 // loop to create rows
 for ($r = 1; $r <= $rows; $r++) {
  echo "<tr>";
  // loop to create columns
  for ($c = 1; $c <= $columns; $c++) {
   echo "<td></td>";
  }
  echo "</tr>";
 }
 echo "</table>";
}
?>