<?php

require_once '../helper/Input.php';

$name = input("Nama");
echo "Hello, $name" . PHP_EOL;

$gender = input("pria/wanita");
if($gender == "pria"){
  echo "you're very handsome, bro";
}elseif($gender == "wanita"){
  echo "oh god, i see an angel";
}else{
  echo "are you a shemale ?";
}

// var_dump($gender);