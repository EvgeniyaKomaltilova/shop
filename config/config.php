<?php

/**
 * 
 * Файл настроек
 * 
 */

// константы для обращения к контроллерам
define ('PATH_PREFIX', '../controllers/');
define ('PATH_POSTFIX', 'Controller.php');

// используемый шаблон
$template = 'default';

// пути к файлам
define ('TEMPLATE_PREFIX', "../views/{$template}/");
define ('TEMPLATE_POSTFIX', '.tpl');

// пути к файлам шаблонов в вебпространсте
define ('TEMPLATE_WEBPATH', "/templates/{$template}/");

// инициализация шаблонизатора Smarty
require('../library/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TEMPLATE_PREFIX);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/lexer');

$smarty->assign('templateWebPath', TEMPLATE_WEBPATH);