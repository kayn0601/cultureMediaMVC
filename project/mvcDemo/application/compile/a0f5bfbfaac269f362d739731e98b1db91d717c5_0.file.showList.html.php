<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-08 06:32:20
  from 'D:\wamp64\www\project\mvcDemo\application\template\admin\showList.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f572574dc4912_53018455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0f5bfbfaac269f362d739731e98b1db91d717c5' => 
    array (
      0 => 'D:\\wamp64\\www\\project\\mvcDemo\\application\\template\\admin\\showList.html',
      1 => 1599546722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f572574dc4912_53018455 (Smarty_Internal_Template $_smarty_tpl) {
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
    <style>
        body{
            background: rgba(224,223,205,0.5);
        }
    </style>
</head>
<body>
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>所属分类</th><th>标题</th><th>操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            <tr>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>

                </td>
                <td>
                    <a href="/project/mvcDemo/index.php/admin/content/show?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
" class="btn btn-success">查看</a>
                    <a href="/project/mvcDemo/index.php/admin/content/edit?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
" class="btn btn-primary">编辑</a>
                </td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
</body>
</html><?php }
}
