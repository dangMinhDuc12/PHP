<?php 

for($i = 0; $i < 10; $i++) {
  echo $i . "<br>";
}

//foreach

$list = ['first' => 'Duc', 'second' => 'Thang'];
foreach ($list as $key => $value) {
  echo $key . $value;
}

?>