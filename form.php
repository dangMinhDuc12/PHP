<?php
//biến $_POST là 1 array associative chứa các biến được truyền qua method POST và key của các biến đó là name của các thẻ bên trong thẻ form
//isset(): check xem 1 biến có giá trị hay không, nếu có thì trả về true, nếu là NULL trả về false

if (isset($_POST['submitForm'])) {
$username = $_POST['username'];
$password = $_POST['password'];
echo "Username" . " " .  $username;
echo "<br>";
echo "Password" . " " . $password;

}
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="form.php" method="post">
    <input type="text" placeholder="username" name="username">
    <br>
    <input type="password" placeholder="password" name="password">
    <br>
    <input type="submit" name="submitForm">
</form>
</body>
</html>
