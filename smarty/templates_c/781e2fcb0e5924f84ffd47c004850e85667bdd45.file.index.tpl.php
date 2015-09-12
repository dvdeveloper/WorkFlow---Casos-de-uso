<?php /* Smarty version Smarty-3.1.18, created on 2015-01-15 03:54:52
         compiled from "views/generate/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93713078354b4703089f4f4-45331232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '781e2fcb0e5924f84ffd47c004850e85667bdd45' => 
    array (
      0 => 'views/generate/index.tpl',
      1 => 1421280277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93713078354b4703089f4f4-45331232',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54b470308ba5b3_71524304',
  'variables' => 
  array (
    '_PUBLIC' => 0,
    'imagen' => 0,
    'data' => 0,
    'item' => 0,
    'value' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b470308ba5b3_71524304')) {function content_54b470308ba5b3_71524304($_smarty_tpl) {?><html>
<head>
	<meta charset="utf-8"> 
	<title>PDF</title>
	<style type="text/css">
		a{ text-decoration: none; }

		body{ font-family: "Trebuchet MS"; font-size: 12px; }
		.content{ width: 700px; border: 1px solid #CCC; margin: auto; }
		.img_usecase{ width: 100%; }
		.title_separation{ border-bottom: 1px solid #CCC; padding-bottom: 10px; padding-left: 20px; }

		.header{ background: #2c5077; padding: 20px 10px; }
		.header a{ color: #FFF; font-size: 20px; }
		.logo_text{ margin-top: -10px; margin-bottom: 10px; }
		.logo_text p{ margin-bottom: -10px !important; margin-top: 0px !important; }
		.logo_text span{ font-size: 12px;  }
		.logo_img{ display: block; float: left; margin-right: 10px; width: 35px; margin-top: 3px; }

		.title_color{ background: #2c5077; color: #FFF; padding: 10px; }
		.display_left_caso{ display: block; float: left; margin-right: 20px; margin-top: -1px; }
		.template_cuse{  background: #FFF; width: 95%; border: 1px solid #CCC; margin: auto; margin-top: 20px; margin-bottom: 20px;  padding-top: 0px; }
		.template_cuse .row{ padding: 10px; }
		.row_title{ background: #2c5077; color: #FFF; padding-top: 10px; }
		.row_title .title-template{ color: #FFF !important; }
		.title-template{ font-weight: bold; color: #404040; font-size: 14px;  }
		.border_row{  border-bottom: 1px solid #CCC; padding-bottom: 10px; }
		.border_row textarea, .border_row textarea:focus{ border: 1px solid #CCC !important; box-shadow: none !important;  border-radius: 0px !important; }
		.border_row textarea{ height: 40px; resize: vertical; width: 100%; padding: 5px; }
		.table_header_tpl thead th{ background: #f5f5f5; color: #404040; }
		.table_header_tpl{ border: 1px solid #CCC; }
		.row_bottom{ padding-bottom: 15px; }
		.border_bottom_none{ border-bottom: 0px !important; }

		.table{ width: 100%; text-align: center; font-size: 12px; margin-top: 10px; border: 1px solid #CCC; }
		.table thead th{ border-bottom: 1px solid #CCC; padding: 5px; background: #f5f5f5; }
		.table tbody td{ padding: 5px; }

		.text-rp{ display: block; margin-top: 10px; }
	</style>
</head>
<body>

	<div class="content">

		<div class="header">
			<a href="#" class="logo_text">
	        	<img src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
/images/logo.png" class="logo_img">
	        	<p>CUML</p>
	        	<span>Open Source Project</span>
	      	</a>
		</div>

		<h3 class="title_separation">CASO DE USO</h3>
		<img class="img_usecase" src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value;?>
">

		<h3 class="title_separation title_color">TEMPLATE</h3>

		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['document']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?> 
		<div class="template_cuse">
			<div class="row border_row row_title">
				<div class="display_left_caso title-template">Caso </div>
				<div class="col-md-8 name_usecase"> <?php echo $_smarty_tpl->tpl_vars['item']->value['caso'];?>
 </div>
			</div>

			<div class="row border_row row_bottom">
				<div class="col-md-4 title-template">Objetivo Asociados</div>
				<div class="col-md-8">
					<?php if (isset($_smarty_tpl->tpl_vars['value'])) {$_smarty_tpl->tpl_vars['value'] = clone $_smarty_tpl->tpl_vars['value'];
$_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['item']->value['templates'][0]['value']; $_smarty_tpl->tpl_vars['value']->nocache = null; $_smarty_tpl->tpl_vars['value']->scope = 0;
} else $_smarty_tpl->tpl_vars['value'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['templates'][0]['value'], null, 0);?>
					<span class="text-rp"><?php echo !empty($_smarty_tpl->tpl_vars['value']->value) ? $_smarty_tpl->tpl_vars['value']->value : 'none.';?>
</span>
				</div>
			</div>

			<div class="row border_row row_bottom">
				<div class="col-md-4 title-template">Requisitos Asociados</div>
				<div class="col-md-8">
					<?php if (isset($_smarty_tpl->tpl_vars['value'])) {$_smarty_tpl->tpl_vars['value'] = clone $_smarty_tpl->tpl_vars['value'];
$_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['item']->value['templates'][1]['value']; $_smarty_tpl->tpl_vars['value']->nocache = null; $_smarty_tpl->tpl_vars['value']->scope = 0;
} else $_smarty_tpl->tpl_vars['value'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['templates'][1]['value'], null, 0);?>
					<span class="text-rp"><?php echo !empty($_smarty_tpl->tpl_vars['value']->value) ? $_smarty_tpl->tpl_vars['value']->value : 'none.';?>
</span>
				</div>
			</div>

			<div class="row border_row row_bottom">
				<div class="col-md-4 title-template">Descripción</div>
				<div class="col-md-8">
					<?php if (isset($_smarty_tpl->tpl_vars['value'])) {$_smarty_tpl->tpl_vars['value'] = clone $_smarty_tpl->tpl_vars['value'];
$_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['item']->value['templates'][2]['value']; $_smarty_tpl->tpl_vars['value']->nocache = null; $_smarty_tpl->tpl_vars['value']->scope = 0;
} else $_smarty_tpl->tpl_vars['value'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['templates'][2]['value'], null, 0);?>
					<span class="text-rp"><?php echo !empty($_smarty_tpl->tpl_vars['value']->value) ? $_smarty_tpl->tpl_vars['value']->value : 'none.';?>
</span>
				</div>
			</div>

			<div class="row border_row row_bottom">
				<div class="col-md-4 title-template">Precondición</div>
				<div class="col-md-8">
					<?php if (isset($_smarty_tpl->tpl_vars['value'])) {$_smarty_tpl->tpl_vars['value'] = clone $_smarty_tpl->tpl_vars['value'];
$_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['item']->value['templates'][3]['value']; $_smarty_tpl->tpl_vars['value']->nocache = null; $_smarty_tpl->tpl_vars['value']->scope = 0;
} else $_smarty_tpl->tpl_vars['value'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['templates'][3]['value'], null, 0);?>
					<span class="text-rp"><?php echo !empty($_smarty_tpl->tpl_vars['value']->value) ? $_smarty_tpl->tpl_vars['value']->value : 'none.';?>
</span>
				</div>
			</div>

			<div class="row border_row row_bottom">
				<div class="col-md-4 title-template">Secuencia Normal</div>
				<div class="col-md-8">
					<table class="table">
						<thead>
							<tr>
								<th> Nº</th>
								<th>Acción</th>
							</tr>
						</thead>
						<tbody>
							<?php if (isset($_smarty_tpl->tpl_vars["count"])) {$_smarty_tpl->tpl_vars["count"] = clone $_smarty_tpl->tpl_vars["count"];
$_smarty_tpl->tpl_vars["count"]->value = "1"; $_smarty_tpl->tpl_vars["count"]->nocache = null; $_smarty_tpl->tpl_vars["count"]->scope = 0;
} else $_smarty_tpl->tpl_vars["count"] = new Smarty_variable("1", null, 0);?>
							<?php if ((count($_smarty_tpl->tpl_vars['item']->value['templates'][7]['value'])!=0)) {?>
								<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['templates'][7]['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['count']->value++;?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>
								</tr>
								<?php } ?>
							<?php } else { ?>
								<tr>
									<td>0</td>
									<td>none.</td>
								</tr>
							<?php }?>
						</tbody>
					</table>

				</div>
			</div>

			<div class="row border_row row_bottom">
				<div class="col-md-4 title-template">Postcondición</div>
				<div class="col-md-8">
					<?php if (isset($_smarty_tpl->tpl_vars['value'])) {$_smarty_tpl->tpl_vars['value'] = clone $_smarty_tpl->tpl_vars['value'];
$_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['item']->value['templates'][4]['value']; $_smarty_tpl->tpl_vars['value']->nocache = null; $_smarty_tpl->tpl_vars['value']->scope = 0;
} else $_smarty_tpl->tpl_vars['value'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['templates'][4]['value'], null, 0);?>
					<span class="text-rp"><?php echo !empty($_smarty_tpl->tpl_vars['value']->value) ? $_smarty_tpl->tpl_vars['value']->value : 'none.';?>
</span>
				</div>
			</div>

			<div class="row border_row row_bottom">
				<div class="col-md-4 title-template">Excepciones</div>
				<div class="col-md-8">
					<table class="table ">
						<thead>
							<tr>
								<th> Nº</th>
								<th>Acción</th>
							</tr>
						</thead>

						<tbody>
							<?php if (isset($_smarty_tpl->tpl_vars["count"])) {$_smarty_tpl->tpl_vars["count"] = clone $_smarty_tpl->tpl_vars["count"];
$_smarty_tpl->tpl_vars["count"]->value = "1"; $_smarty_tpl->tpl_vars["count"]->nocache = null; $_smarty_tpl->tpl_vars["count"]->scope = 0;
} else $_smarty_tpl->tpl_vars["count"] = new Smarty_variable("1", null, 0);?>
							<?php if ((count($_smarty_tpl->tpl_vars['item']->value['templates'][8]['value'])!=0)) {?>
								<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['templates'][8]['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['count']->value++;?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>
								</tr>
								<?php } ?>
							<?php } else { ?>
								<tr>
									<td>0</td>
									<td>none.</td>
								</tr>
							<?php }?>
						</tbody>
					</table>
				</div>
			</div>

			<div class="row border_row row_bottom">
				<div class="col-md-4 title-template">Frecuencia Esperada</div>
				<div class="col-md-8">
					<?php if (isset($_smarty_tpl->tpl_vars['value'])) {$_smarty_tpl->tpl_vars['value'] = clone $_smarty_tpl->tpl_vars['value'];
$_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['item']->value['templates'][5]['value']; $_smarty_tpl->tpl_vars['value']->nocache = null; $_smarty_tpl->tpl_vars['value']->scope = 0;
} else $_smarty_tpl->tpl_vars['value'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['templates'][5]['value'], null, 0);?>
					<span class="text-rp"><?php echo !empty($_smarty_tpl->tpl_vars['value']->value) ? $_smarty_tpl->tpl_vars['value']->value : 'none.';?>
</span>
				</div>
			</div>

			<div class="row border_row border_bottom_none">
				<div class="col-md-4 title-template">Comentarios</div>
				<div class="col-md-8">
					<?php if (isset($_smarty_tpl->tpl_vars['value'])) {$_smarty_tpl->tpl_vars['value'] = clone $_smarty_tpl->tpl_vars['value'];
$_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['item']->value['templates'][6]['value']; $_smarty_tpl->tpl_vars['value']->nocache = null; $_smarty_tpl->tpl_vars['value']->scope = 0;
} else $_smarty_tpl->tpl_vars['value'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['templates'][6]['value'], null, 0);?>
					<span class="text-rp"><?php echo !empty($_smarty_tpl->tpl_vars['value']->value) ? $_smarty_tpl->tpl_vars['value']->value : 'none.';?>
</span>
				</div>
			</div>
		</div>
		<?php } ?>

	</div>
</body>
</html><?php }} ?>
