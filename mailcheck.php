<?php
$mail=$_POST['mail'];

if(strpos($mail,'@')){
    if(strpos($mail,'.com')){
        echo "this is a valid email";
    }
    else {
        echo ".com is missing";
}
}
else{
    echo "this is invalid mail";
}