<?php
$table_of=$_GET['timestable'];

for ($i=1; $i < $table_of; $i++) { 

    for ($j=1; $j <=10; $j++) { 
        echo "$i * $j=" . $i*$j ."<br>";
    }
}