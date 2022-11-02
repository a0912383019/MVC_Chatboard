<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/reply.css">
    <link rel="stylesheet" href="../public/css/textAlign.css">
</head>

<body>

    {if $wrongID}
        <div class="textalign">
            <h3>找不到這則留言</h3>
        </div>
    {else}
        <a href="../controllers/logoutController.php">登出</a>
        <h2 class="textalign">回覆</h2>
        <div class="chatbox" id="chatbox">
            <br>
            {foreach from=$mainComment item=item}
                <span>
                    {$item.nickname} {$item.createtime} :
                </span>

                <p>{htmlspecialchars($item.content)}</p>
            {/foreach}

            <div class="innerchatbox">
                <hr class="hidehr">
                {foreach from=$replyComment item=item3}
                    <span>
                        {$item3.nickname} {$item3.createtime} :
                    </span>
                    <div>
                        <p>
                            {htmlspecialchars($item3.content)}
                        </p>
                        <hr class="greyhr">

                    </div>
                {{/foreach}}
            </div>
        </div>

        <div class="comment">
            <form action="" method="post" onsubmit="return add_comments()">
                {foreach from=$mainComment item=item}
                    <input type="hidden" id="param" value="{$item.id}">
                {{/foreach}}
                <input type="text" class="textbox" name="comments" id="textbox">
                <input type="submit" value="留言" class="textupdate" name="SubmitButton">
            </form>
            <h3 style="text-align: center;"><a href="chatboard.php">留言板</a></h3>
        </div>
    {/if}
</body>
<script type="text/javascript" src="../public/js/jquery.min.js"></script>
<script type="text/javascript" src="../public/js/reply.js"></script>