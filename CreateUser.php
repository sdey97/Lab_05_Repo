<?php
  $userID = $_POST["user_id"];
  $mysqli = new mysqli("mysql.eecs.ku.edu", "s156d039", "rooHuth7", "s156d039");

/* check connection */
  if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  if($userID != null)
  {
    $query = "INSERT INTO Users (user_id) VALUES ('" . $userID . "')";
    if($mysqli->query($query) === true)
    {
      echo "User was added!";
    }
    else
    {
      echo "Sorry the user already exists.";
    }
  }
  else
  {
    echo "Please enter a username.";
  }

  /* close connection */
  $mysqli->close();
 ?>
