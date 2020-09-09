<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-08 06:32:19
  from 'D:\wamp64\www\project\mvcDemo\application\template\admin\addcon.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f5725734cf513_43347521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '846cd28daaeb0fcd6bb7ede5900a3261aac9e377' => 
    array (
      0 => 'D:\\wamp64\\www\\project\\mvcDemo\\application\\template\\admin\\addcon.html',
      1 => 1599546722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5725734cf513_43347521 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加内容</title>
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
        <form action="/project/mvcDemo/index.php/admin/content/addcon" method="post">
            <div class="form-group">
                <label for="cid">所属分类</label>
                <select class="form-control" id="cid" name="cid">

                </select>
            </div>
            <div class="form-group">
                <label for="ctitle">内容标题</label>
                <input type="text" class="form-control" id="ctitle" name="ctitle" placeholder="标题">
            </div>
            <div class="form-group">
                <label for="cons">内容主体</label>
                <textarea class="form-control" rows="3" name="cons" id="cons" style="height: 250px"></textarea>
            </div>
            <button type="submit" class="btn btn-default">添加</button>
        </form>
    </div>
</body>
</html><?php }
}
