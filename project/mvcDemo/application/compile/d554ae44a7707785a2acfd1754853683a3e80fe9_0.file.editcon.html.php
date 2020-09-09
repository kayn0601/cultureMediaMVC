<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-08 06:33:35
  from 'D:\wamp64\www\project\mvcDemo\application\template\admin\editcon.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f5725bfd51c05_32157878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd554ae44a7707785a2acfd1754853683a3e80fe9' => 
    array (
      0 => 'D:\\wamp64\\www\\project\\mvcDemo\\application\\template\\admin\\editcon.html',
      1 => 1599546808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5725bfd51c05_32157878 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>修改内容</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/jquery3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/addcon.js"><?php echo '</script'; ?>
>
    <style>
        body{
            background: rgba(224,223,205,0.5);
        }
    </style>
</head>
<body>
<div class="container">
    <form action="/project/mvcDemo/index.php/admin/content/editcon" method="post">
        <div class="form-group">
            <label for="cid">所属分类</label>
            <select class="form-control" id="cid" name="cid" cid="<?php echo $_smarty_tpl->tpl_vars['data']->value['cid'];?>
">

            </select>
        </div>
        <input type="hidden" name="conid" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['conid'];?>
">
        <div class="form-group">
            <label for="ctitle">内容标题</label>
            <input type="text" class="form-control" id="ctitle" name="ctitle" placeholder="标题" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ctitle'];?>
">
        </div>
        <div class="form-group">
            <label for="cons">内容主体</label>
            <textarea class="form-control" rows="3" name="cons" id="cons" style="height: 250px"><?php echo $_smarty_tpl->tpl_vars['data']->value['cons'];?>
</textarea>
        </div>
        <button type="submit" class="btn btn-default">修改</button>
    </form>
</div>
</body>
</html><?php }
}
