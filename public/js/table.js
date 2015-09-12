$(function(){

    var html_form = "<form id='pop_mensaje' title='Agregar' class='mensaje_popup'>"+
                            "<input type='text' id='text_node'>"+
                        "</form>";

    //------------- SECUENCE ------------------                    

	$("body").on('click','.btn-secnormal',function(){
		
        var objeto = $(this);
        var tabla = $(this).parent().find('.table_sec_normal tbody');
        
        $(html_form).dialog({
            open: function() {
            	var text = objeto.text();
            	$('#text_node').val(text);
            },
            close: function(){
                $(this).dialog("destroy");
            },
            width: 400,
            buttons: [
                {
                    text: "Agregar",
                    click: function(){
                    	var text = $('#text_node').val();

                    	if(text.match(/\S/)){
                        	var row = "<tr>"+
                        					"<td class='table_text'>"+text+"</td>"+
                        					"<td>"+
                                                "<a href='javascript:' class='btn-del-secnormal'><img src='public/images/delete.gif'/></a> "+
                                                "<a href='javascript:' class='btn-edit-secnormal'><img src='public/images/edit.gif'/></a> "+
                                            "</td>'"+
                        				"</tr>";
                            
                            tabla.append(row);
                    	}

                        $(this).dialog( "destroy" );
                    }
                }
            ]
        });
	});

	$("body").on('click','.btn-del-secnormal',function(){
		$(this).parent().parent().remove();
	});

    $("body").on('click','.btn-edit-secnormal',function(){

        var objeto = $(this).parent().parent().find('.table_text');
        $(html_form).dialog({
            open: function() {
                $('#text_node').val(objeto.text());
            },
            close: function(){
                $(this).dialog("destroy");
            },
            width: 400,
            buttons: [
                {
                    text: "Actualizar",
                    click: function(){
                        var text = $('#text_node').val();

                        if(text.match(/\S/)){
                            $(objeto).html(text);
                        }

                        $(this).dialog( "destroy" );
                    }
                }
            ]
        });

    });


    //------------- EXCEPTION ------------------

    $("body").on('click','.btn-excepciones',function(){
        
        var objeto = $(this);
        var tabla = $(this).parent().find('.table_excepciones tbody');
        
        $(html_form).dialog({
            open: function() {
                var text = objeto.text();
                $('#text_node').val(text);
            },
            width: 400,
            buttons: [
                {
                    text: "Agregar",
                    click: function(){
                        var text = $('#text_node').val();

                        if(text.match(/\S/)){
                            var row = "<tr>"+
                                            "<td class='table_text'>"+text+"</td>"+
                                            "<td>"+
                                                "<a href='javascript:' class='btn-del-excep'><img src='public/images/delete.gif'/></a> "+
                                                "<a href='javascript:' class='btn-edit-excep'><img src='public/images/edit.gif'/></a> "+
                                            "</td>'"+
                                        "</tr>";
                            
                            tabla.append(row);
                        }

                        $(this).dialog( "destroy" );
                    }
                }
            ]
        });
    });

    $("body").on('click','.btn-del-excep',function(){
        $(this).parent().parent().remove();
    });

    $("body").on('click','.btn-edit-excep',function(){

        var objeto = $(this).parent().parent().find('.table_text');
        $(html_form).dialog({
            open: function() {
                $('#text_node').val(objeto.text());
            },
            width: 400,
            buttons: [
                {
                    text: "Actualizar",
                    click: function(){
                        var text = $('#text_node').val();

                        if(text.match(/\S/)){
                            $(objeto).html(text);
                        }

                        $(this).dialog( "destroy" );
                    }
                }
            ]
        });

    });

});