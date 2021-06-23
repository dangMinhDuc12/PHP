<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  
  $numberList = [2,3,5,89,778,464,'Hello','<h1>Duc</h1>'];
  echo $numberList[7];
  echo '<br>';
  print_r($numberList);
  echo '<br>';

  //arrays associative
  $nameList = ['first_name' => 'Truong', 'second_name' => 'Thang'];
  print_r($nameList);
  echo '<br>';
  echo $nameList['first_name'];
  ?>
</body>
</html>