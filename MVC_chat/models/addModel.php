<?php
require_once("../config/DataAccess.php");

class addModel
{
    var $dao;

    /**
     * DB的連接
     */
    function __construct()
    {
        $this->dao = new DataAccess();
    }

    /**
     * 用於插入留言
     * 接收controller傳來的參數（使用者，留言）
     */
    function insertComment($_User, $_Comments)
    {
        try {
            $sql = $this->dao->link_id->prepare("INSERT INTO comments (nickname,content,createtime) values (:nickname,:content,now())");
            $sql->execute(array('nickname' => $_User, 'content' => $_Comments));
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    /**
     * 用於插入回覆
     * 接收controller傳來的參數（使用者，留言，要回覆的留言的id）
     */
    function insertReply($_User, $_Comments, $_ID)
    {
        try {
            $sql = $this->dao->link_id->prepare("INSERT INTO reply (nickname,content,createtime,rid) values (:nickname,:content,now(),:id)");
            $sql->execute(array('nickname' => $_User, 'content' => $_Comments, 'id' => $_ID));
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
