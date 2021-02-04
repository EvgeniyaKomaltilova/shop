<?php

/**
 * 
 * Контроллер главной страницы сайта
 * 
 */

/**
 * 
 * Формирование главной страницы сайта
 * 
 * @param object $smarty шаблонизатор
 */

 function indexAction($smarty) {
     $smarty->assign('pageTitle', 'Главная страница сайта');
     loadTemplate($smarty, 'index');
 }