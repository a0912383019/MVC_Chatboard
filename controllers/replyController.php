<?php
## 讀取資料而已 資料庫連線建立模型都在初始頁執行

class replyController{
    var $model;

    /**
     * 建構reply模型
     * $_dao是外部傳進來的資料庫模型
     */
    function __construct ($_dao) {
        $this->model=new replyModel($_dao);
    }

    /**
     * 執行model裡 commentNote函式
     * 回傳陣列（當前評論）
     */
    function getMainComment($_ID){
        $aMainComment[]=$this->model->commentNote($_ID);
        return $aMainComment;
    }

    /**
     * 執行model裡 replyNote函式
     * 回傳陣列（當前評論底下的所有回覆）
     */
    function getReply($_ID){
        $aReplyComments=$this->model->replyNote($_ID);
        return $aReplyComments;
    }

    /**
     * 傳入$_id (url的參數)給model的checkID函式去檢查
     * 回傳boolean
     */
    function checkID($_ID){
        $bCheckID = $this->model->checkID($_ID);
        return $bCheckID;
    }
}
