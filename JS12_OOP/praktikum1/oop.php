<?php
class Car {
    public $brand;

    public function startEngine() {
        echo "Engine started!<br>";
    }
}

$car1 = new Car();
$car1->brand = "Toyota";

$car2 = new Car();
$car2->brand = "Honda";

$car1->startEngine();
echo $car2->brand . "<br>";
?>

<br>

<?php
class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function eat() {
        echo $this->name . " is eating.<br>";
    }

    public function sleep() {
        echo $this->name . " is sleeping.<br>";
    }
}

class Cat extends Animal {
    public function meow() {
        echo $this->name . " says meow!<br>";
    }
}

class Dog extends Animal {
    public function bark() {
        echo $this->name . " says woof!<br>";
    }
}

$cat = new Cat("Whiskers");
$dog = new Dog("Buddy");

$cat->eat();
$dog->sleep();

$cat->meow();
$dog->bark();
?>

<br>

<?php
interface Shape {
    public function calculateArea();
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

function printArea(Shape $shape) {
    echo "Area: " . $shape->calculateArea() . "<br>";
}

$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

printArea($circle);
printArea($rectangle);
?>

<br>

<?php
class CarDetails {
    private $model;
    private $color;

    public function __construct($model, $color) {
        $this->model = $model;
        $this->color = $color;
    }

    public function getModel() {
        return $this->model;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }
}

$car = new CarDetails("Toyota", "Blue");

echo "Model: " . $car->getModel() . "<br>";
echo "Color: " . $car->getColor() . "<br>";

$car->setColor("Red");

echo "Updated Color: " . $car->getColor() . "<br>";
?>

<br>

<?php
// Abstract class
abstract class Shape1 {
    // Method abstrak yang harus diimplementasikan oleh class turunan
    abstract public function calculateArea();
}

// Class Circle yang mengextends class Shape
class Circle2 extends Shape1 {
    private $radius;

    // Konstruktor untuk menginisialisasi radius
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Implementasi metode calculateArea() untuk lingkaran
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

// Class Rectangle yang mengextends class Shape
class Rectangle1 extends Shape1 {
    private $width;
    private $height;

    // Konstruktor untuk menginisialisasi lebar dan tinggi
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // Implementasi metode calculateArea() untuk persegi panjang
    public function calculateArea() {
        return $this->width * $this->height;
    }
}

// Membuat objek dari class Circle dan Rectangle
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

// Menampilkan hasil perhitungan luas
echo "Area of Circle: " . $circle->calculateArea() . "<br>";
echo "Area of Rectangle: " . $rectangle->calculateArea() . "<br>";
?>

<br>
<?php
interface Shape2 {
    public function calculateArea();
}

interface Color6 {
    public function getColor();
}

class Circle3 implements Shape2, Color6 {
    private $radius;
    private $color;

    public function __construct($radius, $color) {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }

    public function getColor() {
        return $this->color;
    }
}

// Pastikan untuk membuat objek dari class Circle3, bukan Circle
$circle = new Circle3(5, "Blue");

echo "Area of Circle: " . $circle->calculateArea() . "<br>";
echo "Color of Circle: " . $circle->getColor() . "<br>";
?>
<br>
<?php
class Car3 {
    private $brand;

    // Constructor, dipanggil saat objek dibuat
    public function __construct($brand) {
        echo "A new car is created. <br>";
        $this->brand = $brand;
    }

    // Method untuk mendapatkan merek mobil
    public function getBrand() {
        return $this->brand;
    }

    // Destructor, dipanggil saat objek dihancurkan atau keluar dari ruang lingkup
    public function __destruct() {
        echo "The car is destroyed. <br>";
    }
}

$car = new Car3("Toyota");
echo "Brand: " . $car->getBrand() . "<br>";
?>
<br>

<?php
class Animal2 {
    public $name;    // Dapat diakses dari luar class
    protected $age;  // Hanya bisa diakses dari dalam class dan class turunannya
    private $color;  // Hanya bisa diakses dari dalam class itu sendiri

    // Constructor untuk inisialisasi objek
    public function __construct($name, $age, $color) {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }

    
    public function getName() {
        return $this->name;
    }

    
    protected function getAge() {
        return $this->age;
    }

    
    private function getColor() {
        return $this->color;
    }
}

// Membuat objek dari class Animal
$animal = new Animal2("Dog", 3, "Brown");


echo "Name: " . $animal->name . "<br>"; // Bisa diakses karena public

?>





