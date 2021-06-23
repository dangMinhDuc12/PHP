<?php
  class Person {
    public $name;
    public $age;
    protected $address = 'Bach Mai';
    private $university = 'BK';

    public function __construct($name, $age)
    {
      $this->name = $name;
      $this->age = $age;
    }

    public function saySomething() {
      echo "Hello class";
    }

    public function set_name($name) {
      $this->name = $name;
    }
    public function get_name() {
      return $this->name;
    }
    public function getUni() {
      return $this->university;
    }
  }

  //Gọi hàm __constructor khi khởi tạo instance
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

  //có thể thay đổi property class từ bên ngoài nếu khai báo biến bằng từ khoá var
  $studentA->name = 'abc';
  echo "<br>";
  echo $studentA->name;
  echo "<br>";


  //Kế thừa, Đóng gói
  /*
   * Public: Ở bên ngoài, bên trong, và class con đều có thể truy cập được
   * Protected: Chỉ có bên trong, class con mới có thể truy cập
   * Private: Chỉ có class đó mới có thể truy cập
   * */
  class Workers extends Person {
    public $job;
    public function __construct($name, $age, $job)
    {
      //gọi lại hàm construct của class cha mà không cần phải khai báo lại từ đầu
      parent::__construct($name, $age);
      $this->job = $job;
    }
    public function getAddress() {
      echo parent::get_name();
      return $this->address;
    }
  }

  $workerA = new Workers('Tuan Ha', 25, 'Comtor');
  echo $workerA->name;
  echo "<br>";
  echo $workerA->age;
  echo "<br>";
  echo $workerA->job;
  echo "<br>";
  echo $workerA->getAddress();
  echo "<br>";
  echo $workerA->getUni();

  //Static Method (gọi trực tiếp hàm hoặc property từ class mà không phải tạo instance)
  class Street {
    public static function hello() {
      echo "Hello Viet Nam";
    }
  }
  echo "<br>";
  Street::hello();
