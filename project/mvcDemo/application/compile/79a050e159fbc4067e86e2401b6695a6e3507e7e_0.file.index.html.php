<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-09 02:16:19
  from 'D:\wamp64\www\project\mvcDemo\application\template\admin\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f583af3aefbb4_98854168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79a050e159fbc4067e86e2401b6695a6e3507e7e' => 
    array (
      0 => 'D:\\wamp64\\www\\project\\mvcDemo\\application\\template\\admin\\index.html',
      1 => 1599617774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f583af3aefbb4_98854168 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>后台首页</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/index.css">
</head>
<body>
<container>
    <div class="header">
        <h1>欢迎来到后台管理系统</h1>
        <div class="logininfo">
            <span>用户：<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
，</span>
            <span>
                <a href="/project/mvcDemo/index.php/admin/index/logout" class="btn btn-danger">退出登录</a>
            </span>
        </div>
    </div>
    <div class="main">
        <div class="left">
            <ul>
                <li>
                    <h3>用户管理</h3>
                    <ul>
                        <li>
                            <a href="/project/mvcDemo/index.php/admin/user/adduser" target="main" class="btn btn-success">添加用户</a>
                        </li>
                        <li>
                            <a href="/project/mvcDemo/index.php/admin/user/edituser" target="main" class="btn btn-primary">修改用户</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <h3>栏目管理</h3>
                    <ul>
                        <li>
                            <a href="/project/mvcDemo/index.php/admin/category/addcate" target="main" class="btn btn-success">添加栏目</a>
                        </li>
                        <li>
                            <a href="/project/mvcDemo/index.php/admin/category" target="main" class="btn btn-primary">查看栏目</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <h3>内容管理</h3>
                    <ul>
                        <li>
                            <a href="/project/mvcDemo/index.php/admin/content/add" target="main" class="btn btn-success">添加内容</a>
                        </li>
                        <li>
                            <a href="/project/mvcDemo/index.php/admin/content/showList" target="main" class="btn btn-primary">查看内容</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="right">
            <iframe src="" frameborder="0" name="main"></iframe>
        </div>
    </div>
    <div class="bottom">
        <div>xxxx版权信息，xxx制作，联系方式</div>
    </div>
</container>
</body>
</html><?php }
}
