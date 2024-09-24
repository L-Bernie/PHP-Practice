<?php

echo "enter numbers separated by comma ( , ) \n";

$input = fgets(STDIN);

$array = explode(',',$input);

$highestnumber = (int)trim($array[0]);

foreach($array as $number){
  $number = (int)trim($number);
  
  if($number > $highestnumber){
    $highestnumber = $number;
  }
}

echo"The highest number is:" . $highestnumber . PHP_EOL;



foreach($array as $number){
  $number = (int)trim($number);
  
  if($number<$highestnumber){
    $highestnumber = $number;
  }
}

echo"The lowest number is:" . $highestnumber . PHP_EOL;
?>
