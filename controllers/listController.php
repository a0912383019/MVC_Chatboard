<?php

class listController
{
    var $model;

    /** 
     * 構造一個模型儲存在$this->model
     */
    function __construct($_dao)
    {
        $this->model = new listModel($_dao);
    }

    /**
     * 執行listmodel中的getFinal函式，並回傳一個陣列包含
     * 所有評論跟回覆
     */
    function getComments()
    {
        $aFinalData = $this->model->getFinal();
        return $aFinalData;
    }
}
