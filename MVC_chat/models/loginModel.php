<?php
require_once("../config/DataAccess.php");

class loginModel
{
    /**
     * 確認是否有這個使用者
     * 有的話回傳陣列（暱稱，帳號跟密碼）
     * 沒有的話回傳false
     */
    function checkap($_Account)
    {
        $dao = new DataAccess();
        $sql = $dao->link_id->prepare("select * from user where account = :account");
        $sql->execute(array('account' => $_Account));

        ## if exist this account
        if ($result = $sql->fetch()) {
            return $result;
        } else {
            return false;
        }
    }
}
