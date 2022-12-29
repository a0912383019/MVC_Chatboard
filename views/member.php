<?php
require_once('./libs/Smarty.class.php');
require_once('../controllers/sessionController.php');

##是否登入
$swss = new sessionController();
$bool=$swss->isLogin("member");

$smarty = new Smarty;
$smarty->assign("bool", $bool);

$smarty->display('./demo/templates/member.tpl');
