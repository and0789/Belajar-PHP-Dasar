<?php
require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";


addTodoList("Andre");
addTodoList("Septian");
addTodoList("Alhassan");

var_dump($todoList);