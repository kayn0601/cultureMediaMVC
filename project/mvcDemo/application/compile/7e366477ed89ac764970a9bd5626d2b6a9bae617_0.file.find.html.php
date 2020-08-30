<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 10:40:30
  from 'D:\wamp64\www\project\mvcDemo\application\template\index\find.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4b821e416342_82460301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e366477ed89ac764970a9bd5626d2b6a9bae617' => 
    array (
      0 => 'D:\\wamp64\\www\\project\\mvcDemo\\application\\template\\index\\find.html',
      1 => 1598784028,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4b821e416342_82460301 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>诚聘英才</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/public.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
index/find.css">
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
index/find.js"><?php echo '</script'; ?>
>
</head>
<body>
    <!-- 头部导航 -->
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <!-- banner -->
    <div class="banner"></div>
    <!-- 岗位 -->
    <div class="job">
        <div class="nowpo">         
            当前位置：首页 > 诚聘英才 > 社会招聘
        </div>
        <div class="shop">
            <div class="shop-title">市场部岗位</div>
            <div class="shop-button">∧</div>
        </div>
        <div class="shopContent">
            <div class="shopContent-item">
                <div class="shopContent-item-titlebox">
                    <div class="line"></div>
                    <div class="shopContent-item-title">
                        <?php echo $_smarty_tpl->tpl_vars['condata0']->value["ctitle"];?>

                    </div>
                    <div class="shopContent-item-date">
                        发布时间：2019-10-29
                    </div>
                </div>
                <div class="shopContent-content">
                    <?php echo $_smarty_tpl->tpl_vars['condata0']->value["cons"];?>

                </div>
            </div>
            <div class="shopContent-item">
                <div class="shopContent-item-titlebox">
                    <div class="line"></div>
                    <div class="shopContent-item-title">
                        <?php echo $_smarty_tpl->tpl_vars['condata1']->value["ctitle"];?>

                    </div>
                    <div class="shopContent-item-date">
                        发布时间：2019-10-29
                    </div>
                </div>
                <div class="shopContent-content">
                    <?php echo $_smarty_tpl->tpl_vars['condata1']->value["cons"];?>

                </div>
            </div>
        </div>
        <div class="purch">
            <div class="purch-title">采购部岗位</div>
            <div class="purch-button">∨</div>
        </div>
        <div class="purchContent">
            <div class="purchContent-item">
                <div class="purchContent-item-titlebox">
                    <div class="line"></div>
                    <div class="purchContent-item-title">
                        <?php echo $_smarty_tpl->tpl_vars['condata2']->value["ctitle"];?>

                    </div>
                    <div class="purchContent-item-date">
                        发布时间：2019-10-29
                    </div>
                </div>
                <div class="purchContent-content">
                    <?php echo $_smarty_tpl->tpl_vars['condata2']->value["cons"];?>

                </div>
            </div>
            <div class="purchContent-item">
                <div class="purchContent-item-titlebox">
                    <div class="line"></div>
                    <div class="purchContent-item-title">
                        <?php echo $_smarty_tpl->tpl_vars['condata3']->value["ctitle"];?>

                    </div>
                    <div class="purchContent-item-date">
                        发布时间：2019-10-29
                    </div>
                </div>
                <div class="purchContent-content">
                    <?php echo $_smarty_tpl->tpl_vars['condata3']->value["cons"];?>

                </div>
            </div>
        </div>
        <div class="cusc">
            <div class="cusc-title">客服部岗位</div>
            <div class="cusc-button">∨</div>
        </div>
        <div class="cuscContent">
            <div class="cuscContent-item">
                <div class="cuscContent-item-titlebox">
                    <div class="line"></div>
                    <div class="cuscContent-item-title">
                        <?php echo $_smarty_tpl->tpl_vars['condata4']->value["ctitle"];?>

                    </div>
                    <div class="cuscContent-item-date">
                        发布时间：2019-10-29
                    </div>
                </div>
                <div class="cuscContent-content">
                    <?php echo $_smarty_tpl->tpl_vars['condata4']->value["cons"];?>

                </div>
            </div>
            <div class="cuscContent-item">
                <div class="cuscContent-item-titlebox">
                    <div class="line"></div>
                    <div class="cuscContent-item-title">
                        <?php echo $_smarty_tpl->tpl_vars['condata5']->value["ctitle"];?>

                    </div>
                    <div class="cuscContent-item-date">
                        发布时间：2019-10-29
                    </div>
                </div>
                <div class="cuscContent-content">
                    <?php echo $_smarty_tpl->tpl_vars['condata5']->value["cons"];?>

                </div>
            </div>
        </div>
    </div>
    <!-- 底部 -->
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html><?php }
}
