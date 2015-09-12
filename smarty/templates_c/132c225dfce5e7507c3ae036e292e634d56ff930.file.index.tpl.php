<?php /* Smarty version Smarty-3.1.18, created on 2015-02-07 22:55:04
         compiled from "views\error\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1214054d689b8f27626-71821141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '132c225dfce5e7507c3ae036e292e634d56ff930' => 
    array (
      0 => 'views\\error\\index.tpl',
      1 => 1421108716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1214054d689b8f27626-71821141',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54d689b90098b0_71566322',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d689b90098b0_71566322')) {function content_54d689b90098b0_71566322($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="error_page">
	<h1>Error Page</h1>
	<h1><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h1>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
