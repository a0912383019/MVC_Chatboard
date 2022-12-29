<?php
## 讀取資料而已 資料庫連線建立模型都在初始頁執行

class replyModel
{

    var $dao;

    function __construct($dao)
    {
        $this->dao = $dao;
    }

    /**
     * 接收controller傳過的id，將此評論加入陣列並回傳
     */
    function commentNote($_ID)
    {
        $sql = $this->dao->link_id->prepare("select * from comments where id =:id");
        $sql->execute(array('id' => $_ID));
        $aData = $sql->fetch(PDO::FETCH_ASSOC); ## (PDO::FETCH_ASSOC)-> array won't repeat

        return $aData;
    }

    /**
     * 接收controller傳過的id，將此reply.rid = comments.id 的回覆加入陣列並回傳
     */
    function replyNote($_ID)
    {
        $sql = $this->dao->link_id->prepare("select * from reply where rid =:id");
        $sql->execute(array('id' => $_ID));
        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            $aData1[] = $row;
        }

        if (isset($aData1)) {
            return $aData1;
        } else {
            return null;
        }
    }

    /**
     * 用controller傳過來的id去抓這則評論，
     * 回傳boolean
     */
    function checkID($_ID)
    {
        $sql = $this->dao->link_id->prepare("select * from comments where id =:id");
        $sql->execute(array('id' => $_ID));
        $row = $sql->fetch();

        if ($row) {
            return false;
        } else {
            return true;
        }
    }
}
