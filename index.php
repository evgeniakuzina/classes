<?php

/*
1. Инкапсуляция - это закрытие части кода в обособленную структуру. Она позволяет объединить переменные и функции и их параметры, связать их с конкретными объектами одного порядка. На мой взгляд, это как упаковка вешей перед переездом из квартиры, во время которой ты раскладываешь все вещи по категориям: кухня, спальня, ванная. Это помогает не перепутать ничего и очень быстро ориентироваться в вещах.
2. Плюсы объектов - это более "чистый" и понятный код, возможность собрать все переменные и функции, которые нужны для объекта, в одном месте. Как с коробкой при переезде, мы можем быть уверены, что в коробку с надписью "Кухня" не попадут вещи из "Ванной". Объекты и классы позволяют убрать повторения в коде. Также объекты закрывают код от постронних глаз и гарантируют, что переменные защищенного типа не могут быть случайно или умышленно изменены. Также создание классов и объектов позволяет сократить до минимума возможные правки кода в дальнейшем. Если нужно что-то поменять, то меняется код только в классе, а во всех объектах этого класса он поменяется автоматически. Без использования классов и объектов пришлось бы менять все вручную. Минусы объектов сложно назвать, но возможно, что из-за этой закрытой структуры не так просто в любом месте кода изменить какую-нибудь защищенную переменную. Хотя это скорее плюс, но все же.
*/

class Car {
	private $price;
	public $brand;
	public $model;
	public $color;
	const WHEELS = 4;
	public static $carCounter = 0;
	public function __construct($price, $brand, $model, $color) {
		self::$carCounter++;
		$this->price = $price;
		$this->brand = $brand;
		$this->model = $model;
		$this->color = $color;
	}
	public function getPrice() {
			return $this->price;
		}
}

$bmw = new Car(5000, 'BMW', 'X5', 'Белый');
$toyota = new Car(2000, 'Toyota', 'Camry', 'Черный');

class TV {
	private $price;
	public $brand;
	public $diagonal;
	public $remoteControl;
	public static $tvCounter = 0;
	public function __construct($price, $brand, $diagonal, $remoteControl) {
		self::$tvCounter++;
		$this->price = $price;
		$this->brand = $brand;
		$this->diagonal = $diagonal;
		$this->remoteControl = $remoteControl;
	}
	public function getPrice() {
			return $this->price;
		}
}

$samsung = new TV(500, 'Samsung', 48, 'Да');
$toshiba = new TV(100, 'Toshiba', 17, 'Нет');

class Pen {
	private $price;
	public $refillColor;
	public $bodyColor;
	public $penLid;
	public static $penCounter = 0;
	public function __construct($price, $refillColor, $bodyColor, $penLid) {
		self::$penCounter++;
		$this->price = $price;
		$this->refillColor = $refillColor;
		$this->bodyColor = $bodyColor;
		$this->penLid = $penLid;
	}
	public function getPrice() {
			return $this->price;
		}
}

$firstPen = new Pen(2, 'Голубой', 'Прозрачный', 'Да');
$secondPen = new Pen(1, 'Красный', 'Белый', 'Нет');

class Duck {
	private $name;
	public $color;
	public $age;
	public $placeOfLiving;
	public static $duckCounter = 0;
	public function __construct($name, $color, $age, $placeOfLiving) {
		self::$duckCounter++;
		$this->name = $name;
		$this->color = $color;
		$this->age = $age;
		$this->placeOfLiving = $placeOfLiving;
	}
	public function getName() {
			return $this->name;
		}
}

$firstDuck = new Duck('Роджер', 'Коричневый', 1, 'Парк Горького');
$secondDuck = new Duck('Василиса', 'Сизый', 2, 'Венесуэла');

class Product{
	private $price;
	public $category;
	public $name;
	public $weight;
	public static $productCounter = 0;
	public function __construct($price, $category, $name, $weight) {
		self::$productCounter++;
		$this->price = $price;
		$this->category = $category;
		$this->name = $name;
		$this->weight = $weight;
	}
	public function getPrice() {
			return $this->price;
		}
}

$firstProduct = new Product(20, 'Канцтовары', 'Тетрадь', 100);
$secondProduct = new Product(100, 'Книги', 'Л.Н.Толстой "Война и Мир"', 600);


?>