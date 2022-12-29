<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/chatboard.css">
    <link rel="stylesheet" href="../public/css/textAlign.css">
</head>

<body>

    {if $bool}
        <a href="../controllers/logoutController.php">登出</a>
    {else}
        <a style="display: inline;" href="login.php">登入</a>
    {/if}
    <h3 class="textalign">留言板</h3>
    <div class="chatbox" id="chatbox">

        {foreach item=index2 from=$arr}
            <div class="fstbg">
                <span> {$index2.nickname} {$index2.createtime} :</span>
                <hr class="hidehr">
                <div>
                    <p>{htmlspecialchars($index2.content)}</p>
                    <div class="mainComment">
                        <a href="reply.php?id={$index2.id}">回覆</a>
                    </div>
                </div>

                <div class="showreply">
                    {if isset($index2.Title)}
                        {foreach item=item2 from=$index2.Title}
                            {foreach item=$item3 from=$item2.nickname}
                                <span>
                                    {$item3}
                                {/foreach}
                                {foreach item=$item3 from=$item2.createtime}
                                    {$item3}:
                                </span>
                            {/foreach}
                            {foreach item=$item3 from=$item2.content}
                                <p>{htmlspecialchars($item3)}</p>
                            {/foreach}
                            <hr class="greyline">
                        {/foreach}
                    {/if}
                    <hr class="hidehr">
                </div>
            </div>
            <hr class="hidehr-xl">
        {/foreach}

    </div>
    <div class="comment">
        <form action="" method="post" onsubmit="return add_comments()">
            <input type="text" class="textbox" name="comments" id="textbox">
            <input type="submit" value="留言" class="textupdate" name="SubmitButton">
        </form>
    </div>
</body>

</html>
<script type="text/javascript" src="../public/js/jquery.min.js"></script>
<script src="../public/js/chatboard.js"></script>