<?php /* Smarty version Smarty-3.1.18, created on 2015-01-13 02:09:10
         compiled from "views/error/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46243036154b47036221573-78291098%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a49d72e727d30b6e6ddd7992bd200b73230c062' => 
    array (
      0 => 'views/error/index.tpl',
      1 => 1421108716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46243036154b47036221573-78291098',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54b47036246659_34609262',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b47036246659_34609262')) {function content_54b47036246659_34609262($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="error_page">
	<h1>Error Page</h1>
	<h1><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</h1>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
