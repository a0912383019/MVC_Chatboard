<?php
## 讀取資料而已 資料庫連線建立模型都在初始頁執行

class listModel
{

    var $dao;

    ## DB connect
    function __construct($dao)
    {
        $this->dao = $dao;
    }

    /**
     * 將回覆插入各自的評論陣列中形成二維陣列
     * 再將陣列回傳
     */
    function getFinal()
    {
        $sql = $this->dao->link_id->prepare("select * from comments order by createtime desc");
        $sql->execute();
        $data = [];
        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) { ## (PDO::FETCH_ASSOC)-> array won't repeat
            $data[] = $row;
        }

        $sql1 = $this->dao->link_id->prepare("select rid from reply");
        $sql1->execute();
        $data1 = [];
        while ($row1 = $sql1->fetch(PDO::FETCH_ASSOC)) { ## (PDO::FETCH_ASSOC)-> array won't repeat
            $data1[] = $row1['rid'];
        }

        ## push replies into comments where they belong
        for ($i = 0; $i < count($data); $i++) {
            $pop = array();

            ## if comments.id is in reply.rid array
            if (in_array($data[$i]['id'], $data1)) {

                ## 將 rid = id 的回覆陣列放進各自的評論陣列
                $sql2 = $this->dao->link_id->prepare("select * from reply where rid =:id");
                $sql2->execute(array("id" => $data[$i]['id']));
                while ($row2 = $sql2->fetch(PDO::FETCH_ASSOC)) {  ## (PDO::FETCH_ASSOC)-> array won't repeat
                    array_push($pop, $row2);
                }

                array_push($data[$i], $pop);

                ## array rename so that smarty can choose
                $data[$i]['Title'] = $data[$i][0];
                unset($data[$i][0]);
            }
        }
        return $data;
    }
}
