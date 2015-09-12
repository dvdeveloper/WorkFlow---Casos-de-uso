$(function(){
	$("body").on('dblclick','.objeto',function(){
        
        var html_form = "<form id='pop_mensaje' title='Cambiar texto' class='mensaje_popup'>"+
						    "<input type='text' id='text_node'>"+
						"</form>";


        var objeto = $(this);

        console.log(objeto.text());
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
                    text: "Cambiar",
                    click: function(){
                    	var text = $('#text_node').val();
                    	if(!text.match(/\S/)){
                    		text = "Text Value";
                    	}
                        $(objeto).find('span').html(text);

                        var id = $(objeto).attr("id");
                        change_name(text,id); // TabTemplate.js

                        $(this).dialog("destroy");
                    }
                }
            ]
        });
    });
});