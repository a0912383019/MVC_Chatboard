<?php
/* Smarty version 4.0.0, created on 2022-09-15 04:52:03
  from '/Applications/XAMPP/xamppfiles/htdocs/week2/MVC_chat/views/demo/templates/gogo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_6322935308de33_37244350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de7e19ca5b5d41fba887300f4fa09d4ed37fa488' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/week2/MVC_chat/views/demo/templates/gogo.tpl',
      1 => 1663210319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6322935308de33_37244350 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        h2 {
            text-align: center;
        }

        .chatbox {
            padding-right: 15px;
            background-color: azure;
            margin: 0px auto;
            border: 1px solid black;
            width: 400px;
            height: 500px;
            overflow: auto;
        }

        span {
            font-size: 0.5rem;
            margin-left: 5px;
        }

        p {
            /* line-height: 7px; */
            margin-top: 0;
            padding-left: 60px;
        }

        .comment {
            /* border: 1px red solid; */
            margin: 10px auto;
            width: 415px;
            height: 200px;
        }

        .textbox {
            width: 408px;
            height: 50px;
        }

        .textupdate {
            width: 416px;
            height: 55px;
        }

        .showreply {
            /* border: 1px red solid; */
            margin-right: 15px;
            padding-right: 15px;
            padding-left: 100px;
            background-color: yellow;
        }
    </style>
</head>

<body>
    <h2>留言板</h2>

    <!-- 留言板 -->
    <div class="chatbox" id="chatbox">
        <hr style="visibility: hidden;">

        <div style="background-color:aquamarine">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'index2');
$_smarty_tpl->tpl_vars['index2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index2']->value) {
$_smarty_tpl->tpl_vars['index2']->do_else = false;
?>
                <span> <?php echo $_smarty_tpl->tpl_vars['index2']->value['nickname'];?>
 <?php echo $_smarty_tpl->tpl_vars['index2']->value['createtime'];?>
 :
                </span>

                <div>
                    <p><?php echo $_smarty_tpl->tpl_vars['index2']->value['content'];?>

                    </p>
                    <div style="text-align:right; padding-right:15px; margin-top:-15px;">
                        <a href="reply.php?id=<?php echo $_smarty_tpl->tpl_vars['index2']->value['id'];?>
">回覆</a>
                    </div>
                </div>

                <div class="showreply">
                    <hr style="visibility: hidden;">
                    <?php if ((isset($_smarty_tpl->tpl_vars['index2']->value['Title']))) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['index2']->value['Title'], 'item2');
$_smarty_tpl->tpl_vars['item2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item2']->value) {
$_smarty_tpl->tpl_vars['item2']->do_else = false;
?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item2']->value['nickname'], 'item3');
$_smarty_tpl->tpl_vars['item3']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item3']->value) {
$_smarty_tpl->tpl_vars['item3']->do_else = false;
?>
                                <span>
                                    <?php echo $_smarty_tpl->tpl_vars['item3']->value;?>
:
                                </span>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item2']->value['createtime'], 'item3');
$_smarty_tpl->tpl_vars['item3']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item3']->value) {
$_smarty_tpl->tpl_vars['item3']->do_else = false;
?>
                                <span>
                                    <?php echo $_smarty_tpl->tpl_vars['item3']->value;?>
:
                                </span>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item2']->value['content'], 'item3');
$_smarty_tpl->tpl_vars['item3']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item3']->value) {
$_smarty_tpl->tpl_vars['item3']->do_else = false;
?>
                                <p>
                                    <?php echo $_smarty_tpl->tpl_vars['item3']->value;?>

                                </p>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            <hr style="border: 1px solid grey;">
                            <hr style="visibility: hidden;">
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <hr style="visibility: hidden;">

    </div>

    <div class="comment">
        <form action="" method="post" onsubmit="return add_comments();">
            <input type="text" class="textbox" name="comments" id="textbox">
            <input type="submit" value="留言" class="textupdate" name="SubmitButton">
        </form>
        <p id="msg"></p>
    </div>
</body>

</html>
<?php echo '<script'; ?>
 type="text/javascript" src="../jquery.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    var ele = document.getElementById("chatbox");
    ele.scrollTop = ele.scrollHeight;
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
    function add_comments() {
        var comments = $("#textbox").val().trim();
        if (comments != "") {
            $.ajax({
                type: 'post',
                url: '../controllers/addController.php',
                data: {
                    add_comments: "add_comments",
                    comments: comments
                },
                success: function(response) {
                    console.log(response);
                    if (response == true) {
                        // console.log("success");
                        window.location.href = "chatboard.php";
                    } else {
                        var wrong = response;
                        // console.log("fail");
                        $("#msg").html(wrong);
                    }
                }
            });
        } else {
            alert("Please Fill All The Details");
        }

        return false;
    }
<?php echo '</script'; ?>
><?php }
}
