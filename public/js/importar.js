$(function(){

	var json = null;

	var windows;
	var arrow_style = "Straight";

	function readFile (evt) {
       	var files = evt.target.files;
       	var file = files[0];           
       	var reader = new FileReader();
       	reader.onload = function() {
         	json = this.result;           
       	}
       reader.readAsText(file)
    }

    $("body").on('change','#file',function(e){
    	readFile(e);
    })

	$( ".btn_import" ).button().click(function( event ) {

		var html_form = "<form id='pop_mensaje' title='Subir Archivo' class='mensaje_popup'>"+
						    "<input type='file' id='file'>"+
						"</form>";

		$(html_form).dialog({
            open: function() {

            },
            width: 400,
            buttons: [
                {
                    text: "Subir Archivo",
                    click: function(){
                    	load(json);
                        $(this).dialog( "destroy" );
                    }
                }
            ]
        });

	});
	
	$(".btn_import").button({
		icons: {
			primary: "ui-icon-locked"
		}
	});

	function load(json){
		$("#contenido_all").empty();
		try{

			var flowChart = JSON.parse(json);
			var nodes = flowChart.nodes;
			var documento = flowChart.document;
			count = nodes.length;
			
			$.each(nodes, function( index, elem ) {

				var id;
				switch(elem.type){
					case "actor":
						id = actor(elem.id);
					break;

					case "limite":
						id = limite(elem.id);
					break;

					default:
						id = caso(elem.text,elem.id);
						loadTab(elem.text,elem.id);
					break;
				}
		
				repaint(id, elem.posX, elem.posY);
			});
									
			var connections = flowChart.connections;
			$.each(connections, function( index, elem ) {
				 var connection1 = jsPlumb.connect({
				 	id: elem.connectionId,
					source: elem.pageSourceId,
					target: elem.pageTargetId,
					paintStyle: elem.style,
					connector: elem.connector,
					anchor: elem.anchor,
					overlays: elem.overlay,
					endpoint: elem.endpoint,
				});

				if(elem.label != undefined)
				 	connection1.setLabel( elem.label );

			});

			workflow();

			
			$.each(documento, function(index, elem){
				$("#usecase"+elem.id).load('public/js/template_ucase/template.html',function(){
					
					$(this).find(".name_usecase").html(elem.text);
					
					for(var i = 0; i < (elem.templates.length - 2); i++){
						setObj_class(elem.id,elem.templates[i].value,elem.templates[i].class);
					}

					for(var j = 0; j < elem.templates[7].value.length; j++){
						setTabla(elem.id,elem.templates[7].value[j],'table_sec_normal');
					}

					for(var j = 0; j < elem.templates[8].value.length; j++){
						setTabla(elem.id,elem.templates[8].value[j],'table_excepciones');
					}
					
				});
			});

		}catch(e){
			
		}
	}

	var total_node = 0;
	function loadTab(name,id){
		var li = "<li>"+
					"<a data-toggle='tab' role='tab' aria-controls='usecase"+id+"' id='li-usecase"+id+"' href='#usecase"+id+"'>"+
					"<span class='glyphicon glyphicon-file' aria-hidden='true'></span> "+ name+" </a>"+
				"</li>";

		$('.menu-template #combobox_list').append(li);
		$('.menu-template-content').append('<div class="tab-pane" id="usecase'+id+'" role="tabpanel" ></div>');
		
		total_node++;
		if(total_node == 1){
			clear_empty_message();
		}
	}

	function caso(text,id){
		var caso = "<div class='objeto caso connection' attr-type='caso' id='"+id+"'>"+
						"<span>"+text+"</span>"+
						"<div class='connect'></div>"+
					"</div>";

		$("#contenido_all").append(caso);
		return id;
	}

	
	function limite(id){
		var caso = "<div class='objeto limite' id='"+id+"' attr-type='limite'>"+
						"<span>Limite Sistema</span>"+
					"</div>";

		$("#contenido_all").append(caso);
		return id;
	}

	function actor(id){
		var caso = "<div class='objeto actor connection' id='"+id+"' attr-type='actor'>"+
						"<div class='connect'></div>"+
						"<div class='content_actor'>"+
							"<img src='public/images/actorshow.png' class='imgactor'>"+
							"<span>Nueva Tarea</span>"+
						"</div>"+
					"</div>";

		$("#contenido_all").append(caso);
		return id;
	}


	function repaint(id, posX, posY){
		$('#'+id).css('left', posX);
		$('#'+id).css('top', posY);
		jsPlumb.repaint(id);
	}

});