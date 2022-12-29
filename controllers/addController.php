<?php
session_start();
require_once("../models/addModel.php");

## 如果ajax成功送過來
if (isset($_POST['add_comments'])) {

    ## 取得ajax送過來的資料
    $sComments = $_POST['comments'];

    ## 從chatborad 還是 reply送過來的
    $sIsFrom = $_POST['isFrom'];

    ## reply 送來的會有URL parameter
    $sURLparam = $_POST['URLparam'];
    $sUser = "";

    ## check if session set nickname
    if (isset($_SESSION['nickname'])) {
        $sUser = $_SESSION['nickname'];
    } else {
        $sUser = "guest";
    }
    $model = new addModel();

    ## if from comments
    if ($sIsFrom === "comment") {

        ## model return true or false
        $bRes = $model->insertComment($sUser, $sComments);

        ## return back ajax
        echo $bRes;

        ## if from reply
    } else {

        ## model return true or false
        $bRes = $model->insertReply($sUser, $sComments, $sURLparam);

        ## return back ajax
        echo $bRes;
    }
}
