<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 10:00:41
  from 'D:\wamp64\www\project\mvcDemo\application\template\index\new.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b78c96b5637_35348016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c57b772656563af851a11d07ba7af55f3411f92' => 
    array (
      0 => 'D:\\wamp64\\www\\project\\mvcDemo\\application\\template\\index\\new.html',
      1 => 1598781639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b78c96b5637_35348016 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新闻资讯</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/public.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/new.css">
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
    <!-- 公司动态 -->
    <div class="com">
        <div class="nowpo">         
            当前位置：首页 > 新闻资讯 > 公司动态
        </div>
        <div class="comTop">
            <img src="<?php echo IMG_ADD;?>
imgs-n/comp1.png" alt="">
            <div class="comTop-content">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newarr1']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                <div class="Topcontent">
                    <div class="topwrap">
                        <div>30</div>
                        <div>2019-10</div>
                    </div>
                    <div class="topword">
                        <a class="topword-title" href="/project/mvcDemo/index.php/index/lists?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">
                            <?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>

                        </a>
                        <br>
                        <a class="topword-content">
                            <?php echo $_smarty_tpl->tpl_vars['v']->value["info"];?>

                        </a>
                    </div>
                </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
        <div class="comBot">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newarr2']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <div class="comBot-content">
                <img src="<?php echo IMG_ADD;?>
imgs-n/comp2.png" alt="">
                <div class="comBot-word">
                    <a class="comBot-word-title" href="/project/mvcDemo/index.php/index/lists?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</a>
                    <div>
                        <?php echo $_smarty_tpl->tpl_vars['v']->value["info"];?>

                    </div>
                </div>
                <div class="comBot-date">
                    2019-10-30
                </div>
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
