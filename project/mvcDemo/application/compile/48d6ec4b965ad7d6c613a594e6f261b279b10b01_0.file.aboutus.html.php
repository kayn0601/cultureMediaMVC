<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-10 12:08:21
  from 'D:\wamp64\www\project\mvcDemo\application\template\index\aboutus.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f5a17351a5160_21317551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48d6ec4b965ad7d6c613a594e6f261b279b10b01' => 
    array (
      0 => 'D:\\wamp64\\www\\project\\mvcDemo\\application\\template\\index\\aboutus.html',
      1 => 1599739699,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5a17351a5160_21317551 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>关于我们</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/public.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/aboutus.css">
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
    <!-- 我们的故事 -->
    <div class="ourstory">
        <div class="nowpo">         
            当前位置：首页 > 关于我们 > 公司概况
        </div>
        <div class="ourstoryTop">
            <img src="<?php echo $_smarty_tpl->tpl_vars['img1']->value['imgurl'];?>
" alt="">
            <div class="ostTop-content">
                <div class="ostTop-title">
                    <span class="ostTop-title1"><?php echo $_smarty_tpl->tpl_vars['condata0']->value["ctitle"];?>
</span>
                    <span class="ostTop-title2">STORY</span>
                </div>
                <div class="ostTop-pgh">
                    <?php echo $_smarty_tpl->tpl_vars['condata0']->value["cons"];?>

                </div>
            </div>
        </div>
        <div class="ourstoryBot">
            <div class="ostBot-content">
                <div class="ostBot-pgh">
                    <?php echo $_smarty_tpl->tpl_vars['condata1']->value["cons"];?>

                </div>
            </div>
            <img src="<?php echo $_smarty_tpl->tpl_vars['img2']->value['imgurl'];?>
" alt="">
        </div>
    </div>
    <!-- 公司发展沿革 -->
    <div class="comp">
        <div class="comp-title">
            <span class="comp-title1">公司发展沿革</span>
            <span class="comp-title2">DEVELOPMENT</span>
        </div>
        <img src="<?php echo IMG_ADD;?>
/imgs-a/comp.png" alt="">
    </div>
    <!-- 合作伙伴 -->
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['partner']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <!-- 底部 -->
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html>
</body>
</html><?php }
}
