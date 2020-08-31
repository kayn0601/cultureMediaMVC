<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-31 00:18:49
  from 'D:\wamp64\www\project\mvcDemo\application\template\admin\addcate.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4c41e9782621_77013809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff6b44318c577e7daac5c7cc2c37ca10813d4c4a' => 
    array (
      0 => 'D:\\wamp64\\www\\project\\mvcDemo\\application\\template\\admin\\addcate.html',
      1 => 1598833124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4c41e9782621_77013809 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加栏目</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/jquery3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin/upload.js"><?php echo '</script'; ?>
>
</head>
<body>
    <div class="container">
        <form action="/project/mvcDemo/index.php/admin/category/add" style="margin-top: 30px;margin-bottom: 30px" method="post">
            栏目名：<br>
            <input type="text" placeholder="添加一级栏目" name="cname" style="width: auto;height: 34px;">
            <br>
            显示：
            <select class="form-control" name="isshow" style="width: auto;">
                <option value="1">显示</option>
                <option value="0">隐藏</option>
            </select>
            模板：<br>
            <input type="text" name="tpl_name" placeholder="请输入对应模板名.html" style="width: auto;height: 34px;">
            <br>
            栏目描述：<br>
            <textarea name="info" id="" cols="30" rows="5"></textarea>
            <br>
            <input type="hidden" value="hidden" name="imgurl">
            <div class="upload"></div>
            <br>
            <input type="submit" value="添加" class="btn btn-primary">
        </form>
    </div>
    <?php echo '<script'; ?>
>
        var uploadObj=new upload();
        uploadObj.multiple=true;
        uploadObj.createView({
            parent:document.querySelector(".upload")
        })
        uploadObj.up("/project/mvcDemo/index.php/admin/category/uploadfile",function (e) {
            $("input[type=hidden]").val(e[0]);
        })
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
