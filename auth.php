<?php
/**
 * Created by PhpStorm.
 * User: mpop
 * Date: 16.10.2017
 * Time: 11:38
 */
echo '<pre>';
echo "server<br>";
print_r($_SERVER);
echo "post<br>";
print_r($_POST);
echo "get<br>";
print_r($_GET);
echo "request<br>";
print_r($_REQUEST);
print_r(json_decode(file_get_contents('php://input')));exit;
require_once("config.php");
require __DIR__ . '/vendor/autoload.php';

$pusher = new Pusher(APP_KEY, APP_SECRET, APP_ID, array('cluster' => APP_CLUSTER));

$presence_data = array('name' => $user->name);
echo $pusher->socket_auth($_POST['channel_name'], $_POST['socket_id']);