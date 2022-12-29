<?php

require_once('../config/DataAccess.php');
require_once('./libs/Smarty.class.php');
require_once('../controllers/replyController.php');
require_once('../models/replyModel.php');
require_once('../controllers/sessionController.php');

$swss = new sessionController();
$dao = new DataAccess();
$controller=new replyController($dao);

## url是否有id這個param 沒有的話設０
$rid = isset($_GET['id']) ? $_GET['id'] : 0;

## 判斷是否登入
$bool=$swss->isLogin("member");

## 判斷留言是否有這個id
$wrongID=$controller->checkID($rid);

## 取得目前的評論
$mainComment = $controller->getMainComment($rid);

## 取得評論的回覆
$replyComment = $controller->getReply($rid);

$smarty = new Smarty;
$smarty->assign("mainComment", $mainComment);
$smarty->assign("replyComment", $replyComment);
$smarty->assign("wrongID", $wrongID);

$smarty->display('./demo/templates/reply.tpl');
