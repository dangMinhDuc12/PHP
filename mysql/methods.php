<?php
//Có thể include html trong file php
include "./db.php";

function showAllData() {
  global $connection;
  $query = "SELECT * FROM users";
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die('Read Failed' . mysqli_error($connection));
  }

  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    echo "<option value='$id'>$id</option>";
  }
}

function updateData() {
  global $connection;
  $username = $_POST['username'];
  $password = $_POST['password'];
  $id = $_POST['id'];
  $query = "UPDATE users 
    SET username = '$username', password = '$password' 
    WHERE id = '$id'";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Failed' . mysqli_error($connection));
  }
}

function deleteData() {
  global $connection;
  $id = $_POST['id'];
  $query = "DELETE FROM users WHERE id = '$id'";
  $result = mysqli_query($connection, $query);
  if(!$result) die('Failed' . mysqli_error($connection));
}

