<?php /* Smarty version Smarty-3.1.6, created on 2016-08-28 09:28:20
         compiled from "D:/phpStudy/WWW/ynzy/Manage/Admin/View\Shop\register.html" */ ?>
<?php /*%%SmartyHeaderCode:27815779bcd44ffa07-93588809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b1c9b8bdb6c8875ec04429c7017191baa6ab602' => 
    array (
      0 => 'D:/phpStudy/WWW/ynzy/Manage/Admin/View\\Shop\\register.html',
      1 => 1470618938,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27815779bcd44ffa07-93588809',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5779bcd45fd8c',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'num' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5779bcd45fd8c')) {function content_5779bcd45fd8c($_smarty_tpl) {?><!DOCTYPE html>
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
    <!--图标使用说明在任意标签中加icon-图标名的class就能使用，要引入<?php echo @ADMIN_CSS_URL;?>
font-awesome.min.css <i class="icon-adjust"></i> -->
</head>

<body>
    <div class="container">
        <div class="all-pages">店铺系统 > 注册店铺&nbsp&nbsp&nbsp&nbsp&nbsp
        </div>
        <div class="search-form-div">
            <form action="<?php echo @__SELF__;?>
" method="get" enctype="multipart/form-data" id="searchForm">
                <ul class="select">
                    <li>
                        <input type="text" name="shop_name" class="search" placeholder="  店铺名称">
                    </li>
                    <li>
                        <input type="text" name="shop_nickname" class="search" placeholder="  昵称">
                    </li>
                    <li>
                        <input type="text" name="shop_tel" class="search" placeholder="  手机号">
                        <button id="searchSubmit" class="search-submit my-btn"><i class="icon-search"></i>&nbsp查询</button>
                    </li>
                    <button class="excel-btn my-btn">导出表格</button>
                </ul>
            </form>
        </div>
        <div class="table-div">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <th class="percent5">序号</th>
                        <th class="percent5">头像</th>
                        <th class="percent10">昵称</th>
                        <th class="percent5">分组</th>
                        <th class="percent25 overflow-hidden">店铺名称</th>
                        <th class="percent15">手机</th>
                        <th class="percent5">积分</th>
                        <th class="percent5">余分</th>
                        <th class="percent15">注册日期</th>
                        <th class="percent10">操作</th>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
                    <tr class="<?php if (!(1 & $_smarty_tpl->tpl_vars['v']->iteration)){?>change-color<?php }else{ ?><?php }?> tr-height40" id="shop_<?php echo $_smarty_tpl->tpl_vars['v']->value['shop_id'];?>
">
                        <td class="text-center width50 "><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['num']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_tmp1+$_tmp2;?>
</td>
                        <td class="text-center"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['shop_headimgurl'];?>
" alt="" class="headimgurl" /></td>
                        <td class="padding-left10"><?php echo $_smarty_tpl->tpl_vars['v']->value['shop_nickname'];?>
</td>
                        <td class="padding-left10"><?php echo $_smarty_tpl->tpl_vars['v']->value['shop_group'];?>
</td>
                        <td class="padding-left10"><?php echo $_smarty_tpl->tpl_vars['v']->value['shop_name'];?>
</td>
                        <td class="padding-left10"><?php echo $_smarty_tpl->tpl_vars['v']->value['shop_tel'];?>
</td>
                        <td class="padding-left10"><?php echo $_smarty_tpl->tpl_vars['v']->value['shop_total_scores'];?>
</td>
                        <td class="padding-left10"><?php echo $_smarty_tpl->tpl_vars['v']->value['shop_left_scores'];?>
</td>
                        <td class="padding-left10"><?php echo $_smarty_tpl->tpl_vars['v']->value['register_time'];?>
</td>
                        <td class="text-center">
                            <a href="javascript:;" onclick="if(confirm('确认要删除该商店吗？')){ del(<?php echo $_smarty_tpl->tpl_vars['v']->value['shop_id'];?>
) }"><i class="icon-trash"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </form>
            <div class="bottom-page">
                <ul class="page-ul">
                    <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

                </ul>
                <form action="<?php echo @__SELF__;?>
" method="get" enctype="multipart/form-data" class="page-form">
                    <input type="text" name="per" class="pages" maxlength="2">&nbsp条/页
                    <input type="submit" name="" class="pages-submit" value="确定">
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    function del(shop_id) {
        //利用ajax去服务器删除数据库记录信息
        $.ajax({
            url: "<?php echo @__CONTROLLER__;?>
/del",
            data: {
                'shop_id': shop_id
            },
            dataType: 'json',
            type: 'get',
            success: function(msg) {
                if (msg.status == 1) {
                    $('#shop_' + shop_id).remove();
                }
            }
        });
    }
    </script>
</body>

</html>
<?php }} ?>