<?php

require_once __DIR__ . '/models/TodoList.php';
require_once __DIR__ . '/businessLogic/ShowTodoList.php';
require_once __DIR__ . '/businessLogic/AddTodoList.php';
require_once __DIR__ . '/businessLogic/RemoveTodolist.php';
require_once __DIR__ . '/views/ViewShowTodolist.php';
require_once __DIR__ . '/views/ViewAddTodolist.php';
require_once __DIR__ . '/views/ViewRemoveTodolist.php';
require_once __DIR__ . '/helper/Input.php';

echo "aplikasi to do list \n";

viewShowTodoList();