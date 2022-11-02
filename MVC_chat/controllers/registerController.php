<?php
require_once("../models/registerModel.php");

## if ajax post success
if (isset($_POST['do_register'])) {

    ## get ajax data
    $sNickname = $_POST['nickname'];
    $sAccount = $_POST['account'];
    $sPassword = $_POST['password'];

    ## 建構register model
    $model = new registerModel();

    ## check if nickname and account exist (model function)
    $result = $model->checkn($sNickname);
    $result1 = $model->checka($sAccount);

    if ($result && $result1) {
        echo "暱稱與帳號已使用";
    } else if ($result) {
        echo "暱稱已使用";
    } else if ($result1) {
        echo "帳號已使用";
    } else {
        $sPWhash = password_hash($sPassword, PASSWORD_DEFAULT);

        ## if all pass then create new user (model function) return true or false
        $bRes = $model->newuser($sNickname, $sAccount, $sPWhash);
        echo $bRes;
    }
}
