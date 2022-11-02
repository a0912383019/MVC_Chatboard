<?php
/* Smarty version 4.0.0, created on 2022-09-16 10:01:32
  from '/Applications/XAMPP/xamppfiles/htdocs/week2/MVC_chat/views/demo/templates/chatboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_63242d5c61f3c3_79141605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aef79c1f64ea5ab44fb996b1cb5f1859ab92d50a' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/week2/MVC_chat/views/demo/templates/chatboard.tpl',
      1 => 1663313940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63242d5c61f3c3_79141605 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/chatboard.css">
    <link rel="stylesheet" href="../public/css/textAlign.css">
</head>

<body>

    <?php if ($_smarty_tpl->tpl_vars['bool']->value) {?>
        <a href="../controllers/logoutController.php">登出</a>
    <?php } else { ?>
        <a style="display: inline;" href="login.php">登入</a>
    <?php }?>
    <h3 class="textalign">留言板</h3>
    <div class="chatbox" id="chatbox">

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'index2');
$_smarty_tpl->tpl_vars['index2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index2']->value) {
$_smarty_tpl->tpl_vars['index2']->do_else = false;
?>
            <div class="fstbg">
                <span> <?php echo $_smarty_tpl->tpl_vars['index2']->value['nickname'];?>
 <?php echo $_smarty_tpl->tpl_vars['index2']->value['createtime'];?>
 :</span>
                <hr class="hidehr">
                <div>
                    <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['index2']->value['content']);?>
</p>
                    <div class="mainComment">
                        <a href="reply.php?id=<?php echo $_smarty_tpl->tpl_vars['index2']->value['id'];?>
">回覆</a>
                    </div>
                </div>

                <div class="showreply">
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

                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item2']->value['createtime'], 'item3');
$_smarty_tpl->tpl_vars['item3']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item3']->value) {
$_smarty_tpl->tpl_vars['item3']->do_else = false;
?>
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
                                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value);?>
</p>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <hr class="greyline">
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                    <hr class="hidehr">
                </div>
            </div>
            <hr class="hidehr-xl">
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>
    <div class="comment">
        <form action="" method="post" onsubmit="return add_comments()">
            <input type="text" class="textbox" name="comments" id="textbox">
            <input type="submit" value="留言" class="textupdate" name="SubmitButton">
        </form>
    </div>
</body>

</html>
<?php echo '<script'; ?>
 type="text/javascript" src="../public/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../public/js/chatboard.js"><?php echo '</script'; ?>
><?php }
}
