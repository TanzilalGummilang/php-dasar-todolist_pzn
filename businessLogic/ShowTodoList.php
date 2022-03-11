<?php

function showTodoList()
{
  global $todoList;
  echo "=========================>>\n";
  echo "TODOLIST\n";

  foreach($todoList as $number => $value){
    echo "$number : $value" . PHP_EOL;
  }
}