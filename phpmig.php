<?php

use \Phpmig\Adapter;
use \Pimple\Container;
use Doctrine\DBAL\DriverManager;

$container = new Container();

//$container['db'] = function () {
//    $dbh = new PDO('mysql:dbname=hl;host=127.0.0.1','root','');
//    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    return $dbh;
//};

$container['db'] = function() use ($config) {
    return DriverManager::getConnection(array(
        'driver' => 'pdo_mysql',
        'host' => '127.0.0.1',
        'port' => 3306,
        'dbname' => 'hl',
        'charset' => 'UTF8',
        'user' => 'root',
        'password' => '',
    ));
};

// replace this with a better Phpmig\Adapter\AdapterInterface
$container['db']->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');

$container['phpmig.adapter'] = function($container) {
    return new Adapter\Doctrine\DBAL($container['db'], 'migrations');
};

$container['phpmig.migrations_path'] = __DIR__ . DIRECTORY_SEPARATOR . 'migrations';

// You can also provide an array of migration files
// $container['phpmig.migrations'] = array_merge(
//     glob('migrations_1/*.php'),
//     glob('migrations_2/*.php')
// );

return $container;