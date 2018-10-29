<?php
  echo "<table>";

  $mysqli = new mysqli("mysql.eecs.ku.edu", "s156d039", "rooHuth7", "s156d039");
  /* check connection */
  if ($mysqli->connect_errno)
  {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  echo "<tr> <th>post_id</th> <th>author_id</th> <th>content</th> </tr>";
  $userID = $_POST['user'];
  $query = "SELECT * FROM Posts WHERE author_id='$userID'";

  if ($result = $mysqli->query($query))
  {
    while ($row = $result->fetch_assoc())
    {
      printf("<tr> <td>%s</td> <td>%s</td> <td>%s</td> </tr>", $row["post_id"], $row["author_id"], $row["content"]);
    }
  }
  echo "</table>";
  $result->free();
  $mysqli->close();
?>
