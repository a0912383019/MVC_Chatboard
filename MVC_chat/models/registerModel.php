<?php
require_once("../config/DataAccess.php");

class registerModel
{
    var $dao;

    function __construct()
    {
        $this->dao = new DataAccess();
    }

    /**
     * 確認有沒有這個暱稱
     * 回傳boolean
     */
    function checkn($_Nickname)
    {
        $result = $this->dao->link_id->prepare("SELECT * FROM user where nickname = :nickname");
        $result->execute(array("nickname" => $_Nickname));
        if ($result->fetch()) {
            return true;
        }
    }

    /**
     * 確認有沒有這個帳號
     * 回傳boolean
     */
    function checka($_Account)
    {
        $result1 = $this->dao->link_id->prepare("SELECT * FROM user where account = :account");
        $result1->execute(array("account" => $_Account));
        if ($result1->fetch()) {
            return true;
        }
    }

    /**
     * mysql加入新的Ｕser
     * 回傳boolean
     */
    function newuser($_Nickname, $_Account, $_PWhash)
    {
        try {
            $adduser = $this->dao->link_id->prepare("INSERT INTO user (nickname,account,password) values (:nickname,:account,:password)");
            $adduser->execute(array('nickname' => $_Nickname, 'account' => $_Account, 'password' => $_PWhash));
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
