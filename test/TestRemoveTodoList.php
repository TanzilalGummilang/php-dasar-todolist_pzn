<?php

require_once '../models/TodoList.php';
require_once '../businessLogic/ShowTodoList.php';
require_once '../businessLogic/AddTodoList.php';
require_once '../businessLogic/RemoveTodoList.php';

addTodoList("satu");
addTodoList("dua");
addTodoList("tiga");
addTodoList("empat");
addTodoList("lima");
showTodoList();

removeTodoList(2);
showTodoList();

removeTodoList(1);
showTodoList();

$success = removeTodoList(a);
showTodoList();
var_dump($success);
showTodoList();

