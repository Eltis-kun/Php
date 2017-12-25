<?php

// подключаем файлы ядра
session_start();
function __autoload($class)
{
    require_once __DIR__ . '/core/' . $class . '.php';
}

require_once __DIR__ . '/core/config.php';
//require_once 'core/view.php';
//require_once 'core/controller.php';


/*
Здесь обычно подключаются дополнительные модули, реализующие различный функционал:
	> аутентификацию
	> кеширование
	> работу с формами
	> абстракции для доступа к данным
	> ORM
	> Unit тестирование
	> Benchmarking
	> Работу с изображениями
	> Backup
	> и др.
*/

//require_once 'core/route.php';
Route::start(); // запускаем маршрутизатор
