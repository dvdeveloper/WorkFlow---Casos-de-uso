<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="{$_PUBLIC}favicon.ico" type="image/x-icon" rel="shortcut icon" />
  <title>Dv - Use Case Open Source project</title>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  
  <!-- JQUERY UI -->
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="{$_PUBLIC}ui/jquery-ui-1.10.3.custom.css" />
  <link rel="stylesheet" href="{$_PUBLIC}ui/jquery.ui.1.10.3.ie.css" />
  

  <link rel="stylesheet" type="text/css" href="{$_PUBLIC}css/style.css">

  <script type="text/javascript" src="{$_PUBLIC}js/canvg/canvg.js"></script>
  <script type="text/javascript" src="{$_PUBLIC}js/canvg/rgbcolor.js"></script>
  <script type="text/javascript" src="{$_PUBLIC}js/canvg/StackBlur.js"></script>

  <script src="{$_PUBLIC}js/jsplumb/jsBezier-0.6.js"></script>
  <script src="{$_PUBLIC}js/jsplumb/jsplumb-geom-0.1.js"></script>
  <script src="{$_PUBLIC}js/jsplumb/util.js"></script>
  <script src="{$_PUBLIC}js/jsplumb/dom-adapter.js"></script>
  <script src="{$_PUBLIC}js/jsplumb/jsPlumb.js"></script>
  <script src="{$_PUBLIC}js/jsplumb/endpoint.js"></script>
  <script src="{$_PUBLIC}js/jsplumb/connection.js"></script>
  <script src="{$_PUBLIC}js/jsplumb/anchors.js"></script>
  <script src="{$_PUBLIC}js/jsplumb/defaults.js"></script>
  <script src="{$_PUBLIC}js/jsplumb/connectors-bezier.js"></script>
  <script src="{$_PUBLIC}js/jsplumb/connectors-statemachine.js"></script>
  <script src="{$_PUBLIC}js/jsplumb/connectors-flowchart.js"></script>
  <script src="{$_PUBLIC}js/jsplumb/connector-editors.js"></script>
  <script src="{$_PUBLIC}js/jsplumb/renderers-svg.js"></script>
  <script src="{$_PUBLIC}js/jsplumb/renderers-canvas.js"></script>
  <script src="{$_PUBLIC}js/jsplumb/renderers-vml.js"></script>
  <script src="{$_PUBLIC}js/jsplumb/jquery.jsPlumb.js"></script>

  <script type="text/javascript" src="{$_PUBLIC}js/html2canvas.js"></script>
  <script type="text/javascript" src="{$_PUBLIC}js/table.js"></script>
  <script type="text/javascript" src="{$_PUBLIC}js/TabTemplate.js"></script>
  <script type="text/javascript" src="{$_PUBLIC}js/workflow.js"></script>
  <script type="text/javascript" src="{$_PUBLIC}js/core.js"></script>
  <script type="text/javascript" src="{$_PUBLIC}js/mensaje.js"></script>
  <script type="text/javascript" src="{$_PUBLIC}js/exportar.js"></script>
  <script type="text/javascript" src="{$_PUBLIC}js/importar.js"></script>
  <script type="text/javascript" src="{$_PUBLIC}js/Imagen.js"></script>
  <script type="text/javascript" src="{$_PUBLIC}js/generate.js"></script>
  <script type="text/javascript" src="{$_PUBLIC}js/menu.js"></script>

  <script type="text/javascript" src="{$_PUBLIC}js/menu/jquery.contextMenu.js"></script>
  <link rel="stylesheet" type="text/css" href="{$_PUBLIC}js/menu/jquery.contextMenu.css">

</head>
<body >
  
<nav class="navbar navbar-blue navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand logo_text" href="#">
        <img class="logo_img" src="{$_PUBLIC}images/logo.png">
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
  
	