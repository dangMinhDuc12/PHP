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

