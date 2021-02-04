<?php

include_once '../config/config.php'; //инициализация настроек
include_once '../library/mainFunctions.php'; // основные функции


// определение контроллера и используемой функции
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

loadPage($controllerName, $actionName);