<?php

require_once __DIR__ . '/../models/TodoList.php';
require_once __DIR__ . '/../helper/Input.php';
require_once __DIR__ . '/../businessLogic/RemoveTodolist.php';

function viewRemoveTodoList()
{
  echo "====================\n";
  echo "HAPUS TODO\n";
  $choice = input("nomer (x untuk batal)");

  if($choice == "x"){
    echo "batal menghapus\n";
  }else{
    $success = removeTodoList($choice);

    if($success){
      echo "====================\n";
      echo "berhasil hapus\n";
    }else{
      echo "====================\n";
      echo "gagal menghapus\n";
    }
  }
  
}