<?php

class Classy 
{
  public $propery = 'Hello, World.y';

  public function MyMethod()
  {
    call_user_func(array($this, 'myCallbackMethod'));
  }

  public function MyCallbackMethod()
  {
    echo $this->property;
  } 
}
