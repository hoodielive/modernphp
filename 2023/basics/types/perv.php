<?php

class mc 
{
  public function go(array $arr)
  {
    array_walk($arr, array($this, "walkIt"));
  }

  public function walkIt($val)
  {
    echo $val . "<br />";
  }

  public function export()
  {
    return array($this, 'walkIt');
  }
}

$data = array(1, 2, 3, 4, 5);

$m = new mc;
$m->go($data); 

array_walk($data, $m->export());
