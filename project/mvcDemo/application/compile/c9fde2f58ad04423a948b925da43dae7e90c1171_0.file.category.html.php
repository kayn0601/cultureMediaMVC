<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-29 11:39:57
  from 'D:\wamp64\www\project\mvcDemo\application\template\admin\category.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4a3e8d555233_44403016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9fde2f58ad04423a948b925da43dae7e90c1171' => 
    array (
      0 => 'D:\\wamp64\\www\\project\\mvcDemo\\application\\template\\admin\\category.html',
      1 => 1598701156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4a3e8d555233_44403016 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>查看栏目</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/jquery3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/category.js"><?php echo '</script'; ?>
>
</head>
<body>
    <div class="container">
        <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
            <table class="table table-bordered">
                <?php echo $_smarty_tpl->tpl_vars['data']->value;?>

            </table>
        <?php } else { ?>
        <h2>没有数据</h2>
        <?php }?>
    </div>

    <style>
        .pannel{
            width:40%;height: 40%;
            background:#fff;
            box-shadow: 0 0 4px #000;
            position: fixed;
            left:0;top:20%;right: 0;margin: auto;
            z-index:1;
            display: none;
        }
    </style>
    <div class="pannel addpannel">
        <div class="close">×</div>
        <form action="/project/mvcDemo/index.php/admin/category/add" method="post">
            栏目：<input type="text" name="cname"><br>
            <input type="hidden" name="cid">
            显示：<select name="isshow" style="width: auto;">
                <option value="1">显示</option>
                <option value="0">隐藏</option>
            </select><br>
            模板：<input type="text" name="tpl_name" placeholder="请输入对应模板名.html"><br>
            描述：<textarea name="info"></textarea><br>
            <input type="submit" value="提交" class="btn btn-primary">
        </form>
    </div>
    <div class="pannel editpannel">
        <div class="close">×</div>
        <form action="/project/mvcDemo/index.php/admin/category/add" method="post">
            栏目：<input type="text" name="cname">
            <select name="pid" id="opts"></select>
            <br>
            显示：<select name="isshow" id="isshow" style="width: auto;">
            <option value="1">显示</option>
            <option value="0">隐藏</option>
        </select><br>
            模板：<input type="text" name="tpl_name" placeholder="请输入对应模板名.html"><br>
            描述：<textarea name="info"></textarea><br>
            <input type="button" value="修改" class="btn btn-success">
        </form>
    </div>
</body>
</html><?php }
}
