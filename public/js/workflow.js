$(function(){

	var windows;
    var arrow_style = "Straight";

    workflow = function(){
        
        jsPlumb.importDefaults({
            Endpoint : ["Dot", {radius:2}],
            HoverPaintStyle : {strokeStyle:"#2c5077", lineWidth: 3 },
            ConnectionOverlays : [
                [ "Arrow", { 
                    location:1,
                    id:"arrow",
                    length:14,
                    foldback:0.8
                } ]
            ]
        });       

        windows = jsPlumb.getSelector('.connection');
        
        jsPlumb.makeSource(windows, {

            filter:".connect",               
            anchor:"Continuous",
            connector:[ arrow_style, { curviness:63 } ],
            connectorStyle:{ 
                strokeStyle:"#000", 
                lineWidth:2, 
                outlineWidth:1
            },
            isTarget:true,
            dropOptions : targetDropOptions
            
        }); 

        jsPlumb.makeTarget(windows, {
            dropOptions:{ hoverClass:"dragHover" },
            anchor: "Continuous"             
        });


        var targetDropOptions = {
            tolerance:'touch', 
            hoverClass:'dropHover', 
            activeClass:'dragActive' 
        };
        
        
        arrastrable();


        jsPlumb.bind("click", function(conn, originalEvent) {
            conexion_selecionada = conn;
            menu_arrow();
        });
    }

    $("body").on('click','.objeto',function(){
        objeto_selecionado = this;
    });

    $(document).keyup(function(e){
        if(e.keyCode == 46){
            if(conexion_selecionada != null){
                jsPlumb.detach(conexion_selecionada);
                conexion_selecionada = null;
            }

            if(objeto_selecionado != null){
                jsPlumb.remove(objeto_selecionado);
                objeto_selecionado = null;
            }
        }
    }) 


    posicion_drop = function(ui,_this){
        
        var left = (ui.offset.left - _this.offset().left);
        var top = ui.offset.top - _this.offset().top;
        var style = 'position:absolute;top:' + top + 'px;left:' + left + 'px;'
        return style;
    }
  
    arrastrable = function(){
        jsPlumb.draggable($(".objeto"), {
            scroll:true,
            containment: $(".content_graph"),
            drag: function(){
                jsPlumb.repaint($(this)); // To repaint the connections and endpoints when element is dragged
            }
        });

        $(".objeto").resizable();
    }

});