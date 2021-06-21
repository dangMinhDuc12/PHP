<?php
$name = "ducdang";
$value = 666;
$expire = time() + (7*24*60*60); // Hàm time() lấy thời gian hiện tại giống new Date() JS

//setcookie khi vào trang này, nhận 3 tham số chính là name, value, và thời gian hết hạn expire, các tham số khác có thể là options
setcookie($name, $value, $expire);