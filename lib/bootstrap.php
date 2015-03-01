<?php

$config = require dirname(__FILE__) . '/../config/config.php';

$c['app'] = new \Slim\Slim(array(
    "debug" => $config['debug_flag'],
    "templates.path" => $config['path.templates']
));

// mysqlと接続
try{
    $c['pdo'] = new PDO($config['db.dsn'], $config['db.username'], $config['db.password']);
}catch (PDOException $e){
    exit('データベース接続失敗。'.$e->getMessage());
}

// 設定
error_reporting($config['php.error_reporting']);
ini_set('display_errors', $config['php.display_errors']);
ini_set('log_errors', $config['php.log_errors']);

return $c;
