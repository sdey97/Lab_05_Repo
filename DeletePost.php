<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "s156d039", "rooHuth7", "s156d039");
  $posts = $_POST['posts'];
  
  /* check connection */
  if ($mysqli->connect_errno)
  {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  foreach($posts as $postID)
  {
    $query = "DELETE FROM Posts where post_id = " . $postID;
    $mysqli->query($query);
    echo "Post number " . $postID . " has been deleted.<br>";
  }
  $result->free();
  $mysqli->close();
?>
