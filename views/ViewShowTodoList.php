<?php

require_once __DIR__ . '/../models/TodoList.php';
require_once __DIR__ . '/../businessLogic/ShowTodoList.php';
require_once __DIR__ . '/../helper/Input.php';
require_once __DIR__ . '/ViewAddTodoList.php';
require_once __DIR__ . '/ViewRemoveTodoList.php';

function viewShowTodoList()
{
  while(true){
    showTodoList();

    echo "====================\n";
    echo "MENU" . PHP_EOL;
    echo "(1). Tambah Todo" . PHP_EOL;
    echo "(2). Hapus Todo" . PHP_EOL;
    echo "(x). Keluar" . PHP_EOL;
    
    echo "====================\n";
    $choice = input("pilih 1/2/x");
    if($choice == "1"){
      viewAddTodoList();
    }elseif($choice == "2"){
      viewRemoveTodoList();
    }elseif(strtolower($choice) == "x"){
      break;
    }else{
      echo "xxxxx PILIHAN NGACO !! xxxxx\n";
    }
  }
  
  echo "====================\n";
  echo "GUDBAY..\n";
  echo "=========================>>\n";

}