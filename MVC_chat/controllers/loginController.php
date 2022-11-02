<?php
require_once("../models/loginModel.php");

## if ajax post succcess
if (isset($_POST['do_login'])) {

    ## get ajax data
    $sAccount = $_POST['account'];
    $sPassword = $_POST['password'];

    ##set model
    $model = new loginModel();

    ## run model function (check if user exist) and return array or false
    $result = $model->checkap($sAccount);

    if ($result) {

        ## 判斷輸入的密碼是否正確，$result['password']＝model 回傳過來的密碼
        $bPasswordCheck = password_verify($sPassword, $result['password']); ## 加密的判斷式

        ##如果密碼正確
        if ($bPasswordCheck) {
            session_start();
            $_SESSION['nickname'] = $result['nickname'];
            echo true;
        } else {
            echo "密碼錯誤";
        }
    } else {
        echo "無此帳號";
    }
}
