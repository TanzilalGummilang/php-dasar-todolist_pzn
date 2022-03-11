<?php

require_once '../views/ViewShowTodoList.php';
require_once '../businessLogic/AddTodoList.php';

addTodoList("satu");
addTodoList("dua");
addTodoList("tiga");
addTodoList("empat");
addTodoList("lima");
viewShowTodoList();