$(function(){
	var total_node = 0;
	TabTemplate = function(name,id){
		var li = "<li>"+
					"<a data-toggle='tab' role='tab' aria-controls='usecase"+id+"' id='li-usecase"+id+"' href='#usecase"+id+"'>"+
					"<span class='glyphicon glyphicon-file' aria-hidden='true'></span> "+ name+" </a>"+
				"</li>";

		$('.menu-template #combobox_list').append(li);
		$('.menu-template-content').append('<div class="tab-pane" id="usecase'+id+'" role="tabpanel" ></div>');
		
		$("#usecase"+id).load('public/js/template_ucase/template.html',function(){
			$(this).find(".name_usecase").html(name);
		});
		
		total_node++;
		if(total_node == 1){
			clear_empty_message();
		}
	}

	clear_empty_message = function(){
		$("#msg_empty_node").hide();
	}

	setObj_class = function(id,texto,clase){
		
		var text = (texto.length != 0) ? texto : '...' ;
		var _class = "."+clase;
		var etiqueta = "#usecase"+id + " " + _class;
		$(etiqueta).val(text);
	}
	
	change_name = function(name,id){
		$("#li-usecase"+id).html(name);
		$("#usecase"+id).find(".name_usecase").html(name);
	}

	getObj_asociados = function(id){
		return $("#usecase"+id).find(".obj_asociados").val();
	}

	getReq_asociados = function(id){
		return $("#usecase"+id).find(".req_asociados").val();
	}

	getDescripcion = function(id){
		return $("#usecase"+id).find(".descripcion").val();
	}

	getPrecondicion = function(id){
		return $("#usecase"+id).find(".precondicion").val();
	}

	getPostcondicion = function(id){
		return $("#usecase"+id).find(".postcondicion").val();
	}

	getFr_esperada = function(id){
		return $("#usecase"+id).find(".fr_esperada").val();
	}

	getComent = function(id){
		return $("#usecase"+id).find(".coment").val();
	}

	setTabla = function(id,texto,clase){
		var tabla = $("#usecase"+id).find('.'+clase+' tbody');
		if(texto.match(/\S/)){
        	var row = "<tr>"+
        					"<td class='table_text'>"+texto+"</td>"+
        					"<td>"+
                                "<a href='javascript:' class='btn-del-secnormal'><img src='public/images/delete.gif'/></a> "+
                                "<a href='javascript:' class='btn-edit-secnormal'><img src='public/images/edit.gif'/></a> "+
                            "</td>'"+
        				"</tr>";
            
            tabla.append(row);
    	}
	}

	getSecuence = function(id){
		var tabla =  $("#usecase"+id).find(".table_sec_normal tbody");
		var fila = [];
		tabla.find('tr').each(function() {
			var value = $(this).find(".table_text").html();
			fila.push(value);
		});
		return fila;
	}

	getException = function(id){
		var tabla =  $("#usecase"+id).find(".table_excepciones tbody");
		var fila = [];
		tabla.find('tr').each(function() {
			var value = $(this).find(".table_text").html();
			fila.push(value);
		});
		return fila;
	}
});