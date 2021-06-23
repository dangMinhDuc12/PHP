<?php
$list = [2, 5, 4, 1, 3];
$names = ['Truong', 'Thang', 'Duc'];
//Tìm max
echo max($list);
echo "<br>";
//Tìm min
echo min($list);
echo "<br>";
//Sort arr
sort($list);
print_r($list);
echo "<br>";
//Check xem một phần tử có trong mảng không (giống includes js)
if(in_array('Truong', $names)) {
    echo 'Got Truong';
} else {
    echo 'Dont have Truong';
}

