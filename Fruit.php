<?php

class Fruit {

    // Properties
    public $name;
    public $color

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = color;
    }

    public static function NewFruit($name) {
        return new Fruit($name, "");
    }

    public function __construct() {
        $arguments = func_get_args();
        $numberOfArguments = func_num_args();

        if (method_exists($this, $function =
            'Fruit'.$numberOfArguments)) {
            call_user_func_array(
                array($this, $function), $arguments);
        }
    }

    function __construct($name) {
        $this->name = $name;
    }

    // Methods
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
    function set_color($color) {
        $this->color = $color;
    }
    function get_color() {
        return $this->color;
    }
}

$apple = new Fruit(); // new instance of class Fruit
$apple->set_name('Apple'); // set the name
$apple->set_color('Red'); // set the color

// print data

echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
echo "<br>";

$lemon = new Fruit("Lemon");
$lemon->set_color('Yellow'); // set the color
echo $lemon instanceof Fruit;

