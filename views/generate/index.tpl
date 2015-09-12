<html>
<head>
	<meta charset="utf-8"> 
	<title>DvDeveloper - HTML</title>
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

		.template_index ul li{ list-style: numeric; margin-bottom: 5px; border-bottom: 1px solid #DDD; }
	</style>
</head>
<body>

	<div class="content">

		<div class="header">
			<a href="#" class="logo_text">
	        	<img src="{$_PUBLIC}/images/logo.png" class="logo_img">
	        	<p>DvDeveloper - Use Case</p>
	        	<span>Open Source Project</span>
	      	</a>
		</div>

		<h3 class="title_separation">CASO DE USO</h3>
		<img class="img_usecase" src="{$imagen}">

		<h3 class="title_separation title_color">ÍNDICE CASOS DE USO</h3>
		<div class="template_index">
			<ul>
				{foreach from=$data['document'] item=item} 
				<li><a href="#{$item['caso']|replace:' ':''}">{$item['caso']}</a></li>
				{/foreach}
			</ul>
		</div>

		<h3 class="title_separation title_color">TEMPLATE</h3>

		{foreach from=$data['document'] item=item} 
		<div name="{$item['caso']|replace:' ':''}" id="{$item['caso']|replace:' ':''}" class="template_cuse">
			<div class="row border_row row_title">
				<div class="display_left_caso title-template">Caso </div>
				<div class="col-md-8 name_usecase"> {$item['caso']} </div>
			</div>

			<div class="row border_row row_bottom">
				<div class="col-md-4 title-template">Objetivo Asociados</div>
				<div class="col-md-8">
					{$value = $item['templates'][0]['value']}
					<span class="text-rp">{(!empty($value)) ? $value : 'none.'}</span>
				</div>
			</div>

			<div class="row border_row row_bottom">
				<div class="col-md-4 title-template">Requisitos Asociados</div>
				<div class="col-md-8">
					{$value = $item['templates'][1]['value']}
					<span class="text-rp">{(!empty($value)) ? $value : 'none.'}</span>
				</div>
			</div>

			<div class="row border_row row_bottom">
				<div class="col-md-4 title-template">Descripción</div>
				<div class="col-md-8">
					{$value = $item['templates'][2]['value']}
					<span class="text-rp">{(!empty($value)) ? $value : 'none.'}</span>
				</div>
			</div>

			<div class="row border_row row_bottom">
				<div class="col-md-4 title-template">Precondición</div>
				<div class="col-md-8">
					{$value = $item['templates'][3]['value']}
					<span class="text-rp">{(!empty($value)) ? $value : 'none.'}</span>
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
							{assign var="count" value = "1"}
							{if (count($item['templates'][7]['value']) != 0)}
								{foreach from=$item['templates'][7]['value'] item=value}
								<tr>
									<td>{$count++}</td>
									<td>{$value}</td>
								</tr>
								{/foreach}
							{else}
								<tr>
									<td>0</td>
									<td>none.</td>
								</tr>
							{/if}
						</tbody>
					</table>

				</div>
			</div>

			<div class="row border_row row_bottom">
				<div class="col-md-4 title-template">Postcondición</div>
				<div class="col-md-8">
					{$value = $item['templates'][4]['value']}
					<span class="text-rp">{(!empty($value)) ? $value : 'none.'}</span>
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
							{assign var="count" value = "1"}
							{if (count($item['templates'][8]['value']) != 0)}
								{foreach from=$item['templates'][8]['value'] item=value}
								<tr>
									<td>{$count++}</td>
									<td>{$value}</td>
								</tr>
								{/foreach}
							{else}
								<tr>
									<td>0</td>
									<td>none.</td>
								</tr>
							{/if}
						</tbody>
					</table>
				</div>
			</div>

			<div class="row border_row row_bottom">
				<div class="col-md-4 title-template">Frecuencia Esperada</div>
				<div class="col-md-8">
					{$value = $item['templates'][5]['value']}
					<span class="text-rp">{(!empty($value)) ? $value : 'none.'}</span>
				</div>
			</div>

			<div class="row border_row border_bottom_none">
				<div class="col-md-4 title-template">Comentarios</div>
				<div class="col-md-8">
					{$value = $item['templates'][6]['value']}
					<span class="text-rp">{(!empty($value)) ? $value : 'none.'}</span>
				</div>
			</div>
		</div>
		{/foreach}

	</div>
</body>
</html>