<?php
  $userID = $_POST["userID"];
  $post = $_POST["post"];
  $mysqli = new mysqli("mysql.eecs.ku.edu", "s156d039", "rooHuth7", "s156d039");

/* check connection */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

  if($userID != null)
  {
    $query = "SELECT user_id FROM Users where user_id='$userID'";
    $search = $mysqli->query($query);
    if($search->fetch_assoc())
    {
      $postQuery = "INSERT INTO Posts (author_id, content) VALUES ('" . $userID . "','" . $post . "')";
      $mysqli->query($postQuery);
      echo "Thank you for posting.";
    }
    else
    {
      echo "Error: user does not exist.";
    }
  }
  else
  {
    echo "Please enter a username.";
  }

  $search->free();
  $mysqli->close();
  ?>
