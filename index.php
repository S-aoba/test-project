<?php

// エラーが出る
spl_autoload_extensions('.php');
spl_autoload_register();

// エラーが出ない
// spl_autoload_extensions('.php');
// spl_autoload_register(function($class) {
//   include __DIR__ . '/'  . $class . '.php';
// });

// 期待する動作
// コンソール上にHelloと表示される

$myClass = new MyClass();
$myClass->sayHello();