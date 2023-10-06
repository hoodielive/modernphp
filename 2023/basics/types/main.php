<?php 

$a_boolean = true;
$a_string = "String";
$b_string = 'String too';
$a_integer = 12; 

echo get_debug_type($a_boolean . "\n");
echo get_debug_type($a_string . "\n");

if(is_int($a_integer)) 
{
  $a_integer += 4;
}

var_dump($a_integer);

if(is_bool($a_string)) 
{
  echo "String: $a_boolean";
}

$array = array(1, 2, 3, 4, 5);
print_r($array);

foreach ($array as $i => $value)
{
  print_r($array); 
  unset($array[$i]);
}

print_r($array); 

$array[] = 6;
print_r($array);

// Re-Index
$array = array_values($array);
print_r($array);

$array[] = 7;
print_r($array);
