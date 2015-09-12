<?php /* Smarty version Smarty-3.1.18, created on 2015-02-08 15:13:13
         compiled from "templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2030254d1764705e516-79757628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20a5b87bf1d249a8e4b5bdf6dc560aa9c65c681a' => 
    array (
      0 => 'templates\\header.tpl',
      1 => 1423404791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2030254d1764705e516-79757628',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54d1764726ec68_99672324',
  'variables' => 
  array (
    '_PUBLIC' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d1764726ec68_99672324')) {function content_54d1764726ec68_99672324($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
favicon.ico" type="image/x-icon" rel="shortcut icon" />
  <title>Dv - Use Case Open Source project</title>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  
  <!-- JQUERY UI -->
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
ui/jquery-ui-1.10.3.custom.css" />
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
ui/jquery.ui.1.10.3.ie.css" />
  

  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
css/style.css">

  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/canvg/canvg.js"></script>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/canvg/rgbcolor.js"></script>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/canvg/StackBlur.js"></script>

  <script src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/jsplumb/jsBezier-0.6.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/jsplumb/jsplumb-geom-0.1.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/jsplumb/util.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/jsplumb/dom-adapter.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/jsplumb/jsPlumb.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/jsplumb/endpoint.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/jsplumb/connection.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/jsplumb/anchors.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/jsplumb/defaults.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/jsplumb/connectors-bezier.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/jsplumb/connectors-statemachine.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/jsplumb/connectors-flowchart.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/jsplumb/connector-editors.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/jsplumb/renderers-svg.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/jsplumb/renderers-canvas.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/jsplumb/renderers-vml.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/jsplumb/jquery.jsPlumb.js"></script>

  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/html2canvas.js"></script>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/table.js"></script>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/TabTemplate.js"></script>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/workflow.js"></script>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/core.js"></script>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/mensaje.js"></script>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/exportar.js"></script>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/importar.js"></script>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/Imagen.js"></script>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/generate.js"></script>
  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/menu.js"></script>

  <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/menu/jquery.contextMenu.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
js/menu/jquery.contextMenu.css">

</head>
<body >
  
<nav class="navbar navbar-blue navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand logo_text" href="#">
        <img class="logo_img" src="<?php echo $_smarty_tpl->tpl_vars['_PUBLIC']->value;?>
images/logo.png">
        <p>DvDeveloper - Use Case</p>
        <span>Open Source Project</span>
      </a>
      
    </div>
  </div>
</nav>

<div class="clear"></div>

<div class="submenu">
  <div class="col-xs-12 col-md-12">
    
    <div class="grp_btn json_">
      <button class="btn_ui btn_export">Exportar Archivo</button>
      <button class="btn_ui btn_import">Importar Archivo</button>
    </div>

    <div class="grp_btn grp_btn_images">
      <button class="btn_ui btn_img">PNG</button>
      <button class="btn_ui btn_generate">Generar Documento</button>
    </div>

  </div>
</div>

<div class="clear"></div>
  
	<?php }} ?>
