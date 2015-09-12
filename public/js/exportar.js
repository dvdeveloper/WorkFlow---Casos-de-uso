$(function(){
	
	var node;
	var connections;

	generate_json = function(){
		node 			= [];
		connections 	= [];
		template 		= [];
		template_total 	= [];
		var total = 0;
		$("#contenido_all .objeto").each(function (idx, elem) {
		    
		    var $obj 	= $(elem);
		    var id 		= $obj.attr('id');
		    var type 	= $obj.attr('attr-type');
		    template 	= [];

		    node.push({
		        id: id,
		        type: type,
		        posX: parseInt($obj.css("left"), 10),
		        posY: parseInt($obj.css("top"), 10),
		        text: $obj.find('span').text()
		    });

		    if(type == "caso"){
		    	total++;
			    template.push({
			    	autoincrement:1,
			    	class:'obj_asociados',
			    	value: getObj_asociados(id)
			    });

			    template.push({
			    	autoincrement:2,
			    	class:'req_asociados',
			    	value: getReq_asociados(id)
			    });

			    template.push({
			    	autoincrement:3,
			    	class:'descripcion',
			    	value: getDescripcion(id)
			    });

			    template.push({
			    	autoincrement:4,
			    	class:'precondicion',
			    	value: getPrecondicion(id)
			    });

			    template.push({
			    	autoincrement:5,
			    	class:'postcondicion',
			    	value: getPostcondicion(id)
			    });

			    template.push({
			    	autoincrement:6,
			    	class:'fr_esperada',
			    	value: getFr_esperada(id)
			    });

			    template.push({
			    	autoincrement:7,
			    	class:'coment',
			    	value: getComent(id)
			    });

			    template.push({
			    	autoincrement:8,
			    	class:'table_sec_normal',
			    	value: getSecuence(id)
			    });

			    template.push({
			    	autoincrement:9,
			    	class:'table_excepciones',
			    	value: getException(id)
			    });

			    template_total.push({ id:id, caso: $obj.find('span').text(), templates: template })
			}

		});

		$.each(jsPlumb.getConnections(), function (idx, connection) {
			
			var obj = connection.getOverlays();			

		    connections.push({
		    	posX: connection.getConnector().x,
		    	posY: connection.getConnector().y,
		    	anchor: connection.endpoints[0].anchor.type,
		    	connector: connection.getConnector().type,
		    	style: connection.getPaintStyle(),
		    	label: connection.getLabel(),
		        connectionId: connection.id,
		        pageSourceId: connection.sourceId,
		        pageTargetId: connection.targetId,
		        overlay: [ [ obj[0].type, { foldback:0.8,location: obj[0].loc ,length: obj[0].length  } ] ],
		        endpoint : ["Dot", {radius:2}],
		    });
		});

		var serializedData = JSON.stringify(node);




		UseCaseChart = {};
		UseCaseChart.nodes = node;
		UseCaseChart.connections = connections;
		UseCaseChart.document = template_total
		
		return JSON.stringify(UseCaseChart);
	}

	$( ".btn_export" ).button().click(function( event ) {
		
		var _json = generate_json();
		WindowOpen('POST','generate/file',{ data: _json },'_blank');

	});

	$(".btn_export").button({
		icons: {
			primary: "ui-icon-locked"
		}
	});
	
})