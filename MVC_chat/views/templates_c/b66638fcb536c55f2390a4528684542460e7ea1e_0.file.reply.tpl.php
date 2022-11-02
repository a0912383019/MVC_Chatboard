<?php
/* Smarty version 4.0.0, created on 2022-09-16 10:02:15
  from '/Applications/XAMPP/xamppfiles/htdocs/week2/MVC_chat/views/demo/templates/reply.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_63242d878cdb77_49381254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b66638fcb536c55f2390a4528684542460e7ea1e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/week2/MVC_chat/views/demo/templates/reply.tpl',
      1 => 1663313883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63242d878cdb77_49381254 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/reply.css">
    <link rel="stylesheet" href="../public/css/textAlign.css">
</head>

<body>

    <?php if ($_smarty_tpl->tpl_vars['wrongID']->value) {?>
        <div class="textalign">
            <h3>找不到這則留言</h3>
        </div>
    <?php } else { ?>
        <a href="../controllers/logoutController.php">登出</a>
        <h2 class="textalign">回覆</h2>
        <div class="chatbox" id="chatbox">
            <br>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mainComment']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <span>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['nickname'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['createtime'];?>
 :
                </span>

                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['content']);?>
</p>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <div class="innerchatbox">
                <hr class="hidehr">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['replyComment']->value, 'item3');
$_smarty_tpl->tpl_vars['item3']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item3']->value) {
$_smarty_tpl->tpl_vars['item3']->do_else = false;
?>
                    <span>
                        <?php echo $_smarty_tpl->tpl_vars['item3']->value['nickname'];?>
 <?php echo $_smarty_tpl->tpl_vars['item3']->value['createtime'];?>
 :
                    </span>
                    <div>
                        <p>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item3']->value['content']);?>

                        </p>
                        <hr class="greyhr">

                    </div>
                <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

            </div>
        </div>

        <div class="comment">
            <form action="" method="post" onsubmit="return add_comments()">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mainComment']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <input type="hidden" id="param" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

                <input type="text" class="textbox" name="comments" id="textbox">
                <input type="submit" value="留言" class="textupdate" name="SubmitButton">
            </form>
            <h3 style="text-align: center;"><a href="chatboard.php">留言板</a></h3>
        </div>
    <?php }?>
</body>
<?php echo '<script'; ?>
 type="text/javascript" src="../public/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../public/js/reply.js"><?php echo '</script'; ?>
><?php }
}
