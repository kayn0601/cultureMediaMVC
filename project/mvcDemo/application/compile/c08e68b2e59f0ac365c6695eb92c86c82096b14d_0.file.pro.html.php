<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-10 12:20:47
  from 'D:\wamp64\www\project\mvcDemo\application\template\index\pro.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f5a1a1f367448_48375669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c08e68b2e59f0ac365c6695eb92c86c82096b14d' => 
    array (
      0 => 'D:\\wamp64\\www\\project\\mvcDemo\\application\\template\\index\\pro.html',
      1 => 1599740445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5a1a1f367448_48375669 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>产品与服务</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/public.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/pro.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
index/jquery3.5.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
index/public.js"><?php echo '</script'; ?>
>
</head>
<body>
    <!-- 头部导航 -->
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <!-- banner -->
    <div class="banner"></div>
    <!-- 图书馆馆配 -->
    <div class="library">
        <div class="nowpo">         
            当前位置：首页 > 产品与服务 > 图书馆馆配
        </div>
        <div class="library-title">
            <span class="library-title1"><?php echo $_smarty_tpl->tpl_vars['condata0']->value["ctitle"];?>
</span>
            <span class="library-title2">SERVICE</span>
        </div>
        <div class="library-content">
            <?php echo $_smarty_tpl->tpl_vars['condata0']->value["cons"];?>

        </div>
        <div class="library-img1">
            <img src="<?php echo $_smarty_tpl->tpl_vars['img1']->value['imgurl'];?>
" alt="">
            <img src="<?php echo $_smarty_tpl->tpl_vars['img2']->value['imgurl'];?>
" alt="">
            <img src="<?php echo $_smarty_tpl->tpl_vars['img3']->value['imgurl'];?>
" alt="">
        </div>
        <div class="library-content">
            <?php echo $_smarty_tpl->tpl_vars['condata1']->value["cons"];?>

        </div>
        <div class="library-img2">
            <img src="<?php echo $_smarty_tpl->tpl_vars['img4']->value['imgurl'];?>
" alt="">
            <div>
                <img src="<?php echo $_smarty_tpl->tpl_vars['img5']->value['imgurl'];?>
" alt="">
                <img src="<?php echo $_smarty_tpl->tpl_vars['img6']->value['imgurl'];?>
" alt="">
            </div>
        </div>
    </div>
    <!-- 合作伙伴 -->
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['partner']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <!-- 底部 -->
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html><?php }
}
