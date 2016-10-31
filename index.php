<?php
include __DIR__ . '/vendor/autoload.php'; // 引入 composer 入口文件
use EasyWeChat\Foundation\Application;
$options = [
    'debug'     => true,
    'app_id'    => 'wx3cf0f39249eb0e60',
    'secret'    => 'f1c242f4f28f735d4687abb469072a29',
    'token'     => 'easywechat',
    'log' => [
        'level' => 'debug',
        'file'  => '/tmp/easywechat.log',
    ],
    // ...
];
echo '<pre>';
//应用体  负责处理所有请求 调度 返回
$app = new Application($options);
//print_r($app);exit;
$server = $app->server;
$user = $app->user;

$server->setMessageHandler(function($message) use ($user) {
     //$fromUser = $user->get($message->FromUserName);

     //return "{$fromUser->nickname} 您好！欢迎关注 overtrue!";
     return "您好！欢迎关注 overtrue!";
 });
//print_r($server);
$server->serve()->send();