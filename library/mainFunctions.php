<?php

/**
 * 
 * Основные функции
 * 
 */

 /**
  * Формирование запрашиваемой страницы
  * @param string $controllerName название контроллера
  * @param string $actionName название функции обработки страницы
  */
function loadPage($smarty, $controllerName, $actionName = 'index') {
    include_once PATH_PREFIX . $controllerName . PATH_POSTFIX;
    $function = $actionName . 'Action';

    $function($smarty);
}

/**
 * Загрузка шаблона
 * 
 * @param object @smarty объект шаблонизатора
 * @param string $templateName название файла шаблона
 */
function loadTemplate($smarty, $templateName) {
    $smarty->display($templateName . TEMPLATE_POSTFIX);
}

/**
 * Функция отладки. Останавливает работу программы, выводя значение переменной
 * 
 * @param variant $value переменная для вывода на страницу
 */
function debug($value = null, $die = 1) {
    echo 'Debug: <br /><pre>';
    print_r($value);
    echo '</pre>';
    if($die) die;
}