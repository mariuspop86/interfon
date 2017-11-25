<?php
/**
 * Created by PhpStorm.
 * User: mpop
 * Date: 16.10.2017
 * Time: 11:38
 */

require_once("config.php");
require __DIR__ . '/vendor/autoload.php';

$pusher = new Pusher(APP_KEY, APP_SECRET, APP_ID, array('cluster' => APP_CLUSTER));

$presence_data = array('name' => $_POST['name']);

$pusher->trigger($_POST["channel_name"], "message", $_POST["message"], $_POST["socketId"], true);

echo $pusher->presence_auth($_POST['channel_name'], $_POST['socket_id'], $_POST['id'], $presence_data);