<?php
$given_num=$_POST['factorial'];
$factorial=1;

for ($i=1; $i <= $given_num; $i++) { 
    $factorial=$factorial*$i;
}
echo "The factorial of $given_num is" ." " . $factorial;