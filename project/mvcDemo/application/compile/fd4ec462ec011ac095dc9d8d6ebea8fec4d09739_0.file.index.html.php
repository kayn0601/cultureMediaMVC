<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 08:47:42
  from 'D:\wamp64\www\project\mvcDemo\application\template\index\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b67ae841150_29654286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd4ec462ec011ac095dc9d8d6ebea8fec4d09739' => 
    array (
      0 => 'D:\\wamp64\\www\\project\\mvcDemo\\application\\template\\index\\index.html',
      1 => 1598777261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b67ae841150_29654286 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>首页</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/public.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/index.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
index/jquery3.5.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
index/public.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
index/index.js"><?php echo '</script'; ?>
>
</head>
<body>
    <!-- 头部导航 -->
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <!-- banner轮播图 -->
    <div class="banner">
        <div class="wheel">
            <div class="banner-back">
                <h1 class="banner-title">
                    致力弘文载道&nbsp;&nbsp;服务科技创新
                </h1>
                <h5 class="banner-subtitle">
                    科&nbsp;&nbsp;学&nbsp;&nbsp;/&nbsp;&nbsp;技&nbsp;&nbsp;术&nbsp;&nbsp;/&nbsp;&nbsp;医&nbsp;&nbsp;学&nbsp;&nbsp;/&nbsp;&nbsp;教&nbsp;&nbsp;育&nbsp;&nbsp;/&nbsp;&nbsp;人&nbsp;&nbsp;文&nbsp;&nbsp;社&nbsp;&nbsp;科
                </h5>
                <div class="more">
                    <div class="more-box">了解更多</div>
                </div>
            </div>
            <div class="banner2-back">
                <h1 class="banner2-title">
                    <span class="small">书籍品类</span>
                    <span class="big">全</span>
                    <img src="<?php echo IMG_ADD;?>
imgs/true.png" alt="">
                    &nbsp;&nbsp;
                    <span class="small">响应速度</span>
                    <span class="big">快</span>
                    <img src="<?php echo IMG_ADD;?>
imgs/true.png" alt="">
                    &nbsp;&nbsp;
                    <span class="small">服务快捷</span>
                    <span class="big">好</span>
                    <img src="<?php echo IMG_ADD;?>
imgs/true.png" alt="">
                </h1>
                <div class="banner2-subtitle">
                    <span>大型文化传媒&nbsp;&nbsp;值得相信的图书馆官配服务商</span>
                </div>
            </div>
            <div class="banner-back">
                <h1 class="banner-title">
                    致力弘文载道&nbsp;&nbsp;服务科技创新
                </h1>
                <h5 class="banner-subtitle">
                    科&nbsp;&nbsp;学&nbsp;&nbsp;/&nbsp;&nbsp;技&nbsp;&nbsp;术&nbsp;&nbsp;/&nbsp;&nbsp;医&nbsp;&nbsp;学&nbsp;&nbsp;/&nbsp;&nbsp;教&nbsp;&nbsp;育&nbsp;&nbsp;/&nbsp;&nbsp;人&nbsp;&nbsp;文&nbsp;&nbsp;社&nbsp;&nbsp;科
                </h5>
                <div class="more">
                    <div class="more-box">了解更多</div>
                </div>
            </div>
        </div>
        <div class="banner-arrow">
            <div class="arrow-left">
                <span>&lt;</span>
            </div>
            <div class="arrow-right">
                <span>&gt;</span>
            </div>
        </div>
    </div>
    <!-- 关于我们 -->
    <div class="aboutus">
        <div class="aboutus-title">
            ABOUT&nbsp;US
        </div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['condata']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <div class="aboutus-subtitle">
            <?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>

        </div>
        <div class="aboutus-content1">
            <?php echo $_smarty_tpl->tpl_vars['v']->value["cons"];?>

        </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <div class="aboutus-img">
            <img src="<?php echo IMG_ADD;?>
imgs/aboutus1.png" alt="">
            <img src="<?php echo IMG_ADD;?>
imgs/aboutus2.png" alt="">
            <img src="<?php echo IMG_ADD;?>
imgs/aboutus3.png" alt="">
        </div>
        <div class="aboutus-more">
            <a href="#">了解更多</a>
        </div>
    </div>
    <!-- 产品与服务 -->
    <div class="pro">
        <div class="pro-title">
            PRODUCTS&nbsp;AND&nbsp;SERVICES
        </div>
        <div class="pro-subtitle">
            产品与服务
        </div>
        <div class="pro-img">
            <img src="<?php echo IMG_ADD;?>
imgs/pro1.png" alt="">
            <img src="<?php echo IMG_ADD;?>
imgs/pro2.png" alt="">
            <img src="<?php echo IMG_ADD;?>
imgs/pro3.png" alt="">
            <img src="<?php echo IMG_ADD;?>
imgs/pro4.png" alt="">
        </div>
    </div>
    <!-- 公司发展沿革 -->
    <div class="comp">
        <div class="comp-title">
            PRODUCTS&nbsp;AND&nbsp;SERVICES
        </div>
        <div class="comp-subtitle">
            公司发展沿革
        </div>
        <div class="comp-line"></div>
        <div class="comp-year">
            2018年&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            2017年&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            2016年&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            2015年&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            2014年
        </div>
    </div>
    <!-- 公司资讯 -->
    <div class="info">
        <div class="info-title">
            INFORMATION
        </div>
        <div class="info-subtitle">
            公司资讯
        </div>
        <div class="info-img">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sonInfo']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <div class="info-box">
                <img src="<?php echo IMG_ADD;?>
imgs/info1.jpg" alt="">
                <a class="info-box-title" href="/project/mvcDemo/index.php/index/lists?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>

                </a>
                <div class="info-box-content">
                    <?php echo $_smarty_tpl->tpl_vars['v']->value["info"];?>

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
