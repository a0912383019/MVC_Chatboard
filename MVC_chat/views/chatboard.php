<?php
require_once('../config/DataAccess.php');
require_once('./libs/Smarty.class.php');
require_once('../controllers/listController.php');
require_once('../models/listModel.php');
require_once('../controllers/sessionController.php');

$dao = new DataAccess();
$controller=new listController($dao);
$swss = new sessionController();

##是否登入
$bool=$swss->isLogin();

##取得評論
$re = $controller->getComments();

$smarty = new Smarty;
$smarty->assign("arr", $re);
$smarty->assign("bool",$bool);

$smarty->display('./demo/templates/chatboard.tpl');
