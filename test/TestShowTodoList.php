<?php

require_once '../models/TodoList.php';
require_once '../businessLogic/ShowTodoList.php';

$todoList =
  [
    1 => "belajar php dasar",
    2 => "belajar php oop",
    3 => "belajar php database"
  ];

showTodoList();