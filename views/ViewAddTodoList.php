<?php

require_once __DIR__ . '/../models/TodoList.php';
require_once __DIR__ . '/../helper/Input.php';
require_once __DIR__ . '/../businessLogic/AddTodoList.php';

function viewAddTodoList()
{
  echo "====================\n";
  echo "TAMBAH TODO" . PHP_EOL;
  $todo = input("todo (x untuk batal)");
  if($todo == "x"){
    echo "batal\n";
  }else{
    addTodoList($todo);
  }
}