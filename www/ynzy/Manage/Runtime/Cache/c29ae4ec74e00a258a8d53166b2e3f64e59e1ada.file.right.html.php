<?php /* Smarty version Smarty-3.1.6, created on 2016-07-03 11:42:21
         compiled from "E:/wamp/www/ynzy/Manage/Admin/View\Index\right.html" */ ?>
<?php /*%%SmartyHeaderCode:23296576be51bf12c28-11502681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c29ae4ec74e00a258a8d53166b2e3f64e59e1ada' => 
    array (
      0 => 'E:/wamp/www/ynzy/Manage/Admin/View\\Index\\right.html',
      1 => 1467517339,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23296576be51bf12c28-11502681',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_576be51c0fd4e',
  'variables' => 
  array (
    'Think' => 0,
    'shopCount' => 0,
    'memberCount' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576be51c0fd4e')) {function content_576be51c0fd4e($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>大美云南管理后台</title>
    <link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_CSS_URL;?>
basic.css">
    <script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
main.js"></script>
</head>
<style>
    body{ background-color: #F7F7F7; }
</style>
<body>
<ul class="welcome-ul">
	<li><i class="icon-cog font-size30"></i><strong><?php echo $_SESSION['admin_name'];?>
<!-- 原本是<?php echo $_smarty_tpl->tpl_vars['Think']->value['session']['admin_name'];?>
 --></strong>
		<span>管理员</span>
	</li>
	<li><i class="icon-home font-size30"></i><strong><?php echo $_smarty_tpl->tpl_vars['shopCount']->value;?>
</strong>
		<span>家店铺</span>
	</li>
	<li><i class="icon-user font-size30"></i><strong><?php echo $_smarty_tpl->tpl_vars['memberCount']->value;?>
</strong>
		<span>名会员</span>
	</li>
	<li><i class="icon-time font-size30"></i><strong><?php echo $_SESSION['admin_last_logintime'];?>
</strong>
		<span>登入时间</span>
	</li>
</ul>
</body>
</html>
<?php }} ?>