<?php
echo"Enter Name \n";

$name = trim(fgets(STDIN));

$array = explode(',', $name);

$user = (String)trim($array[0]);
$age = (int)trim($array[1]);

echo"your name is: " . $user . "!\n";
echo"Your age is:" .  $age . "!\n";

?>
