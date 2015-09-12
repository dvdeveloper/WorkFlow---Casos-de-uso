<?php /* Smarty version Smarty-3.1.18, created on 2015-01-13 01:42:12
         compiled from "views/index/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193851824754b468ffd746b0-35062746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60c994ff4631a6c29a95baf882da66d326016bcd' => 
    array (
      0 => 'views/index/index.tpl',
      1 => 1421109730,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193851824754b468ffd746b0-35062746',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54b468ffd8f1a1_05099534',
  'variables' => 
  array (
    '_PUBLIC' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b468ffd8f1a1_05099534')) {function content_54b468ffd8f1a1_05099534($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="content_use">
	<div class="block_left">
		<div class="col-menu menu">
			<div class="header_menu">
				Caso de uso
			</div>
			<ul id="menu_drag">
				<li attr-type="actor"> 
					<img class="icon_menu" src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
images/actor.png">
					Actor
				</li>
				<li attr-type="caso_uso">
					<img class="icon_menu" src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
images/caso.png">
					Caso de uso
				</li>
				<li attr-type="limite">
					<img class="icon_menu" src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
images/limite.png">
					Límite Sistema
				</li>
			</ul>
		</div>

		<div class="col-menu menu">
			<div class="header_menu">
				Propiedades
			</div>
			<div class="body_menu">
				<div id="dimension_default">
					<p class="title_div">Dimensión</p>
					<div>
						<label>Alto: </label><input type="text" id="editor_width" value="">
					</div>

					<div>
						<label>Ancho : </label><input type="text" id="editor_height" value="">
					</div>
				</div>
			</div>
		</div>
	</div>

	
	 <div class="block_right">
	 	<div id="bg_panel" role="tabpanel">

		  <ul class="nav nav-tabs tabheader menu-template" role="tablist">
		    <li role="presentation" class="active">
		    	<a href="#diagram" aria-controls="diagram" role="tab" data-toggle="tab">
		    		<span class="glyphicon glyphicon-random" aria-hidden="true"></span> Diagrama</a>
		    </li>

		    <li class="dropdown" role="presentation">
	        	<a aria-controls="combobox_list" data-toggle="dropdown" class="dropdown-toggle" id="myTabDrop1" href="#" aria-expanded="false">
	        		<span class="glyphicon glyphicon-file" aria-hidden="true"></span> 
	        		Use Case <span class="caret"></span></a>
		        
		        <ul id="combobox_list" aria-labelledby="myTabDrop1" role="menu" class="dropdown-menu">
		        	<span class="alert alert-warning" id="msg_empty_node" role="alert"> 
		        		<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
		        		Sin caso de uso</span>
		        </ul>
	      	</li>
		  </ul>

		  <div class="tab-content menu-template-content">
		    <div role="tabpanel" class="tab-pane active bg-editor" id="diagram">
		    	<div id="contenido_all" class="content_graph"></div>
		    </div>
		  </div>

		</div>
	 	
	 </div>
	
</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
