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

function loadTemplate($smarty, $templateName) {
    $smarty->display($templateName . TEMPLATE_POSTFIX);
}