<?php

$name = "array";

echo "your mama!\n" . $name . "\n";


function print_name($name) : string {
  return $name;
}

print_name($name);

class Head {
  public $disease = "anxiety";

  public function __construct($init) {
    $this->disease = $init;
  }
}
