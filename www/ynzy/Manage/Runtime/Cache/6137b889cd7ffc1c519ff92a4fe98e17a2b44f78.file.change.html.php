<?php /* Smarty version Smarty-3.1.6, created on 2016-08-07 20:18:47
         compiled from "F:/WWW/ynzy/Manage/Admin/View\Shop\change.html" */ ?>
<?php /*%%SmartyHeaderCode:483257a4909f4cd7e7-50250712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6137b889cd7ffc1c519ff92a4fe98e17a2b44f78' => 
    array (
      0 => 'F:/WWW/ynzy/Manage/Admin/View\\Shop\\change.html',
      1 => 1470498902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '483257a4909f4cd7e7-50250712',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57a4909f5da7a',
  'variables' => 
  array (
    'info' => 0,
    'group' => 0,
    'v' => 0,
    'tips' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a4909f5da7a')) {function content_57a4909f5da7a($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\WWW\\ynzy\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
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

<body>
    <div class="container">
        <div class="all-pages">店铺系统 > 店铺管理 > 修改店铺&nbsp&nbsp&nbsp&nbsp&nbsp
        </div>
        <div class="table-div">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
                <input type="hidden" name="shop_id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['shop_id'];?>
" />
                <div class="up-div">
                    <div class="div-header">
                        修改店铺
                        <a href="<?php echo @__CONTROLLER__;?>
/shop"><span class="small-line"><i class="icon-remove remove"></i></span></a>
                    </div>
                    <div class="up-div-1">
                        <label>分组</label>
                        <select name="shop_group" class="shopgroup-select">
                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['group_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['group_name'];?>
</option>
                            <?php } ?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['info']->value['shop_group'];?>
" selected>已选择：<?php echo $_smarty_tpl->tpl_vars['info']->value['shop_group'];?>
</option>
                        </select>
                    </div>
                    <div class="up-div-1">
                        <label>店铺名称&nbsp&nbsp<span class="warning"><?php echo $_smarty_tpl->tpl_vars['tips']->value['shop_name'];?>
</span></label>
                        <input type="text" name="shop_name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['shop_name'];?>
">
                    </div>
                    <div class="up-div-1">
                        <label>手机号&nbsp&nbsp<span class="warning"><?php echo $_smarty_tpl->tpl_vars['tips']->value['shop_tel'];?>
</span></label>
                        <input type="text" name="shop_tel" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['shop_tel'];?>
">
                    </div>
                    <div class="up-div-1">
                        <label>烟草证编号</label>
                        <input type="text" name="shop_number" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['shop_number'];?>
">
                    </div>
                    <div class="up-div-1">
                        <label>累计积分</label>
                        <input type="text" name="shop_total_scores" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['shop_total_scores'];?>
">
                    </div>
                    <div class="up-div-1">
                        <label>剩余积分</label>
                        <input type="text" name="shop_left_scores" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['shop_left_scores'];?>
">
                    </div>
                    <div class="up-div-1">
                        <label>店铺地址</label>
                        <input type="text" name="shop_address" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['shop_address'];?>
">
                    </div>
                    <div class="up-div-1">
                        <label>备注</label>
                        <input type="text" name="shop_tips" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['shop_tips'];?>
">
                        <input type="hidden" name="shop_time" value="<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');?>
 ">
                    </div>
                    <center>
                        <input type="submit" name="update_submit" class="my-btn up-div-btn" value="提交">
                    </center>
                </div>
            </form>
        </div>
</body>

</html>
<?php }} ?>