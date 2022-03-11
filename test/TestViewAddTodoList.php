<?php

require_once '../businessLogic/AddTodoList.php';
require_once '../businessLogic/ShowTodoList.php';
require_once '../views/ViewAddTodoList.php';

addTodoList("satu");
addTodoList("dua");
addTodoList("tiga");

viewAddTodoList();
showTodoList();