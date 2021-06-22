<?php
  class Person {
    var $name;
    var $age;

    function __construct($name, $age)
    {
      $this->name = $name;
      $this->age = $age;
    }

    function saySomething() {
      echo "Hello class";
    }

    function set_name($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
  }

  //Gọi Constructor khi khởi tạo instance
  $studentA = new Person('Truong Nguyen', 24);

  //Gọi method
  $studentA->saySomething();

  //Gọi Property
  echo "<br>";
  echo $studentA->name;
  echo "<br>";
  echo $studentA->age;

  //Dùng getter, setter
  $studentA->set_name('Thang Nguyen');
  echo "<br>";
  echo $studentA->name;
  echo "<br>";
  echo $studentA->get_name();


