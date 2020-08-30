<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 02:32:04
  from 'D:\wamp64\www\project\mvcDemo\application\template\index\footer.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b0fa43c9577_72478916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2752d67c5b3bb60a9c095448850a3c1d5185cef5' => 
    array (
      0 => 'D:\\wamp64\\www\\project\\mvcDemo\\application\\template\\index\\footer.html',
      1 => 1598754724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b0fa43c9577_72478916 (Smarty_Internal_Template $_smarty_tpl) {
?><!--底部-->
<div class="bottom">
    <div class="bottom-content">
        <div class="bottom-title">
                <span class="title1">
                    文化传媒刊物模板
                </span><br><br><br><br>
            <span class="title2">
                    24小时服务热线
                </span><br>
            <span class="title3">
                    020-000000
                </span>
        </div>
        <div class="bottom-list">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuData1']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <ul>
            <li class="lihead">
                <a href="/project/mvcDemo/index.php/index/category?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</a>
            </li>
            <?php if ((isset($_smarty_tpl->tpl_vars['v']->value["child"]))) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value["child"], 'v1');
$_smarty_tpl->tpl_vars['v1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->do_else = false;
?>
                <li>
                    <a href="/project/mvcDemo/index.php/index/lists?cid=<?php echo $_smarty_tpl->tpl_vars['v1']->value['cid'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['v1']->value["cname"];?>

                    </a>
                </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            </ul>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div>
<!-- 回到顶部 -->
<div class="toTop">
    <span>∧</span>
</div><?php }
}
