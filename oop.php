<?php 
	# 创建一个类
	class Person{
		// public $name;
		// public $email;
		// private $name;
		protected $name; //本类和子类可以访问
		private $email;

		// 静态变量
		private static $age = 40;
		public static function getAge(){
			return Person::$age;
		}

		public function setName($sbqname){
			$this->name = $sbqname;
		}
		public function getName(){
			return $this->name;
		}

		public function setEmail($sbqemail){
			$this->email = $sbqemail;
		}
		public function getEmail(){
			return $this->email;
		}

		# 构造函数
		public function __construct($sbqname2="Henry",$sbqemail2="Henry@gmail.com"){
			// echo "Person对象已被创建";
			echo __CLASS__."对象已被创建";
			echo "<br>";
			$this->name = $sbqname2;
			$this->email = $sbqemail2;
		}

		# 析构对象
		public function __destruct(){
			echo __CLASS__."对象已被销毁";
		}
	}

	// $person1 = new Person;
	// $person1->name = "郜超";
	// echo $person1->name;

	// $person1->setName("ziyunnn");
	// echo $person1->getName();
	// $person1->setEmail("852213200@qq.com");
	// echo $person1->getEmail();

	// $person1 = new Person("miaojie","mj@gmail.com");
	// echo $person1->getName();
	// echo "<br>";

	# 继承
	class Customers extends Person{
		private $salary;

		public function setSalary($salary){
			$this->salary = $salary;
		}
		public function getSalary(){
			return $this->salary;
		}

		// protected
		public function setName($name){
			$this->name = $name;
		}

		public function __construct($name,$email,$salary){
			parent::__construct($name,$email);
			$this->salary = $salary;
		}
	}

	$customer = new Customers("Bucky","bucky@gmail.com",3000);
	// $customer->setSalary(3000);
	// echo $customer->getName();
	// echo "<br>";
	// echo $customer->getEmail();
	// echo "<br>";
	// echo $customer->getSalary();
	// echo "<br>";

	// protected
	$customer->setName("Henry");
	echo $customer->getName();
	
	// 调用静态变量
	// echo Person::$age;
	echo Person::getAge();
	echo "<br>";

 ?>