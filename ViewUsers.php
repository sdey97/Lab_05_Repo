<?php
echo "<table>";
echo "<tr><th>user_id</th><tr>";
$mysqli = new mysqli("mysql.eecs.ku.edu", "s156d039", "rooHuth7", "s156d039");

/* check connection */
if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
  $query = "SELECT user_id FROM Users";
  $userList = $mysqli->query($query);

  while($row = $userList->fetch_assoc())
  {
    $data= $row["user_id"];
    echo "<tr><td><br>$data</td></tr>";
  }
  echo "</table>";

/* close connection */
$userList->free();
$mysqli->close();
?>
