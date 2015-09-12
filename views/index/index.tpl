{include file="header.tpl" }

<div class="content_use">
	<div class="block_left">
		<div class="col-menu menu">
			<div class="header_menu">
				Caso de uso
			</div>
			<ul id="menu_drag">
				<li attr-type="actor"> 
					<img class="icon_menu" src="{$_PUBLIC}images/actor.png">
					Actor
				</li>
				<li attr-type="caso_uso">
					<img class="icon_menu" src="{$_PUBLIC}images/caso.png">
					Caso de uso
				</li>
				<li attr-type="limite">
					<img class="icon_menu" src="{$_PUBLIC}images/limite.png">
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
{include file="footer.tpl"}