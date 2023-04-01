<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Andre");
addTodoList("Septian");
addTodoList("Alhassan");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();