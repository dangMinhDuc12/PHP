<?php
$file = "example.txt";
//fopen liên kết php với file được chỉ định xong tham số thứ nhất
// tham số thứ 2 của fopen chỉ định các mode thao tác với file như w: chỉ viết hay r: chỉ đọc
if($handle = fopen($file, 'r')) {

  //Thao tác với file
//  fwrite($handle, 'I love PHP so much');

  //Đọc file
  echo fread($handle, filesize($file));


  fclose($handle);
} else {
  echo "Cannot Edit This File";
}

//Xoá file trong PHP
unlink('example.txt');



