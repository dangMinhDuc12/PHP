<?php 
//regular
function say_Something() {
  echo 'Hello World';
}
say_Something();

//params
function calculate($num1, $num2) {
  echo '<br>';
  echo $num1 + $num2;
}

calculate(11, 21);

//return 
function subtract($number1, $number2) {
  echo '<br>';
  return $number2 - $number1;
}

$result = subtract(26, 78);
echo $result;

?>