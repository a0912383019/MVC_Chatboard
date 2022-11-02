<?php

class sessionController
{

    function __construct()
    {
        session_start();
    }

    /**
     * 判斷是否已經登入，如果未登入進到member頁會跳轉回登入頁
     */
    function isLogin($_getURL = "chatpage")
    {
        ## if login
        if (isset($_SESSION['nickname'])) {
            echo "<h4>HI, " . $_SESSION['nickname'] . "</h4>";
            return true;

            ## if not login
        } else {

            ## if true than it is member page (member need to login to see)
            if ($_getURL == "member") {

                ## return to login page
                header("location:login.php");
            } else {
                echo "<h4>您尚未登入</h4>";
                return false;
            }
        }
    }
}
