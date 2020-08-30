<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-26 14:35:40
  from 'D:\wamp64\www\project\mvcDemo\application\template\admin\show.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f46733c1ecd52_26020493',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b5768347a1bfa373566ae29c3b628081618fca9' => 
    array (
      0 => 'D:\\wamp64\\www\\project\\mvcDemo\\application\\template\\admin\\show.html',
      1 => 1598452535,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f46733c1ecd52_26020493 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>查看内容</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.min.css">
</head>
<body>
    <a href="/project/mvcDemo/index.php/admin/content/showList" class="btn btn-primary">返回</a>
    <br>
    <h2><?php echo $_smarty_tpl->tpl_vars['data']->value["ctitle"];?>
</h2>
    <p>
        <?php echo $_smarty_tpl->tpl_vars['data']->value["cons"];?>

    </p>
</body>
</html><?php }
}
