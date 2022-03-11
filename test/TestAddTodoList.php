<?php

require_once '../models/TodoList.php';
require_once '../businessLogic/AddTodoList.php';
require_once '../businessLogic/ShowTodoList.php';

addTodoList("tanzilal");
addTodoList("gummilang");

// var_dump($todoList);
showTodoList();