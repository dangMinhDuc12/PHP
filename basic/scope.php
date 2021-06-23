<?php 

$x = 'global';

function changeVal() {
  global $x; //Dùng từ khoá global để truy cập vào biến global
  $x = 'local';
}
echo $x;
echo '<br>';
changeVal();
echo $x;
?>