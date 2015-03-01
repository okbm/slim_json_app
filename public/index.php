<?php
require_once '../vendor/autoload.php';

require_once '../lib/helper.php';
$c = require_once '../lib/bootstrap.php';

$app = $c['app'];
$db  = $c['pdo'];

// index
$app->get('/', function () use ($app) {
    $app->render("index.php");
});

// MySQLを叩いてテンプレに渡す
$app->get('/get_lists/:id', function ($id) use ($app, $db) {
    if (!$id) {
        $app->redirect('/');
        return;
    }

    $sql = 'select * from sample where id = ?';
    $stmt = $db->prepare($sql);
    $stmt->execute(array($id));

    while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        $data['title'] = $result['title'];
        $data['detail'] = $result['detail'];
    }

    $app->render('sample.php', array(
        'data' => $data
    ));
});

// jsonのレスポンス
$app->get('/get_json/:id', function ($id) use ($app, $db) {
    if (!$id) {
        $app->redirect('/');
        return;
    }

    $sql = 'select * from sample where id = ?';
    $stmt = $db->prepare($sql);
    $stmt->execute(array($id));

    while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        $data['title'] = $result['title'];
        $data['detail'] = $result['detail'];
    }
    $app->response()->header('Content-Type', 'application/json');
    echo json_encode($data);
});

$app->run();

