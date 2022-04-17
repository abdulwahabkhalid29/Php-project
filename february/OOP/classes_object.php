<?php
//Class
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

//Object
$mango = new Fruit();
$mango->set_name('Mango');
echo $mango->get_name();

$mango->set_name('Apple');
echo $mango->get_name();

$mango->set_name('Banana');
echo $mango->get_name();

?>


