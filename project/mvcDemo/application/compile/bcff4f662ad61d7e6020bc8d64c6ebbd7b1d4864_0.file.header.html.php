<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 02:32:04
  from 'D:\wamp64\www\project\mvcDemo\application\template\index\header.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b0fa42f3fe4_84517332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcff4f662ad61d7e6020bc8d64c6ebbd7b1d4864' => 
    array (
      0 => 'D:\\wamp64\\www\\project\\mvcDemo\\application\\template\\index\\header.html',
      1 => 1598754722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b0fa42f3fe4_84517332 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="head">
        <span style="position: absolute;left: 0;top: 10px;color: #999;font-style: italic;">
            仅做练习和模拟，如有侵权，立即删除
        </span>
        <a id="admin" href="/project/mvcDemo/index.php/admin" style="position: absolute;right: 30px;top: 10px;color: rgb(30, 80, 174);font-style: italic;font-weight: bolder" target="_blank">
            进入后台管理界面
        </a>
    <span class="head-title">文化传媒刊物</span>
    <span class="head-subtitle">模板</span>
    <ul class="head-nav">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuData']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <li>
                <a href="/project/mvcDemo/index.php/index/category?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</a>
            </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<!-- 关于我们下拉栏 -->
<div class="aboutusTab">
    <div class="aboutusTab-content">
        <div class="aboutusTab-img">
            <img src="<?php echo IMG_ADD;?>
imgs/aboutusTab.png" alt="">
            <div class="aboutsusTab-list">
                <div class="aboutsusTab-list-title">
                    知识付费时代，如何辨良莠？
                </div>
                <div class="aboutsusTab-list-content">
                    知识付费是指内容创造者将书籍、理论知识、信息资讯等知识与自身认知积累融合……
                </div>
                <div class="aboutsusTab-list-more">
                    <span>查看更多</span>
                </div>
            </div>
        </div>
        <div class="aboutusTab-table">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menuData']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <?php if ((isset($_smarty_tpl->tpl_vars['v']->value["child"]))) {?>
                <ul>
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
                </ul>
            <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div><?php }
}
