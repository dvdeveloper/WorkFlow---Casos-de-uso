$(function(){
	
    menu_arrow = function(){
        $.contextMenu({
            selector: '._jsPlumb_connector ',
            trigger: 'left',
            callback: function(key, options) {
                var m = key;
                menu_accion(key);
            },
            items: {
                
                "fold1":{
                    "name": "Conector", 
                    "items": {
                        "asociacion": {"name": "Asociación"},
                        "extension": {"name": "Extensión"},
                        "inclusion": {"name": "Inclusión"}
                    }
                },
                "sep1": "---------",
                "Eliminar":{"name": "Eliminar", "icon": "delete"},
            }
        });
    }


    menu_accion = function(accion){
        
        if(accion == "Eliminar"){

            jsPlumb.detach(conexion_selecionada, {
                fireEvent: false, 
                forceDetach: false 
            })
        }

        if(accion == "asociacion"){

            conexion_selecionada.setPaintStyle({ 
                strokeStyle:"#000", 
                lineWidth:2, 
                outlineColor:"transparent", 
                outlineWidth:4,
                dashstyle: "0"
            });

            conexion_selecionada.setLabel("");
        }

        if(accion == "extension"){
            conexion_selecionada.setPaintStyle({ 
                strokeStyle:"#000", 
                lineWidth:2, 
                outlineColor:"transparent", 
                outlineWidth:4,
                dashstyle: "4 2"
            });

            conexion_selecionada.setLabel("<< Extends >> ");
        }

        if(accion == "inclusion"){
            conexion_selecionada.setPaintStyle({ 
                strokeStyle:"#000", 
                lineWidth:2, 
                outlineColor:"transparent", 
                outlineWidth:4,
                dashstyle: "4 2"
            });

            conexion_selecionada.setLabel("<< Include >> ");
        }

    }
});