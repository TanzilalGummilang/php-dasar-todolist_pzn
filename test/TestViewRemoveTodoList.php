<?php

require_once '../businessLogic/AddTodoList.php';
require_once '../businessLogic/ShowTodoList.php';
require_once '../views/ViewRemoveTodoList.php';

addTodoList("satu");
addTodoList("dua");
addTodoList("tiga");

showTodoList();
viewRemoveTodoList();
showTodoList();