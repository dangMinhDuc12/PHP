<?php
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
//    echo $username;
//    echo $password;
  //SQL tự ngăn chặn các ký tự đặc biệt để tránh sql injection, cách để nhận các ký tự đặc biệt đó là sử dụng mysqli_real_escape_string()
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if(!$connection) {
      die('Connect Failed');
    }
    $sqlUsername = mysqli_real_escape_string($connection, $username);
    $sqlPassword = mysqli_real_escape_string($connection, $password);
    $hashFormat = "$2y$10$";
    $salt="iusesomecrazystrings22";
    $hashF_and_salt = $hashFormat . $salt;
    //crypt hàm mã hoá password đi kèm với 1 hasformat và 22 ký tự alphabet ngẫu nhiên
    $encript_password = crypt($sqlPassword, $hashF_and_salt);
    //Dùng dấu nháy kép với câu lệnh sql, dùng nháy đơn để đưa biến vào
    $query = "INSERT INTO users (username, password) VALUES ('$sqlUsername', '$encript_password')";
    $result = mysqli_query($connection, $query);
    if($result) {
      echo 'Insert Done';
    } else {
        die('Insert Failed' . mysqli_error($connection));
    }
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container">
      <div class="col-xs-6">
        <form action="login.php" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password">
          </div>
          <button type="submit" name="submit" class="mt-2 btn btn-primary">Submit</button>
        </form>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>
