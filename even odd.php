<?php
$user_input=$_POST['number'];

if ($user_input%2==0) {
    echo "The number is Even";
}else {
    echo "The number is Odd";
}