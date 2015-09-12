var count = 0;

var conexion_selecionada = null;
var objeto_selecionado = null;

$(function() {
    
    size_editor();
    

	$( "#menu_drag li" ).draggable({
        appendTo: "body",
        helper: function() {
            return $("<ul class='sortable-element'></ul>").append( $(this).clone() );
        }
    });

    $( ".content_graph" ).droppable({
        accept: "#menu_drag li",
        drop: function(event,ui){
            
            var input;
            var type = $(ui.draggable).attr('attr-type');
            var clase = 'caso', attr = 'caso';
            count++;

            switch(type){
                case "actor":
                    attr = 'actor';
                    clase = 'actor connection';
                    input = "<div class='connect'></div>"+
                            "<div class='content_actor'>"+
                                "<img class='imgactor' src='public/images/actorshow.png'>"+
                                "<span>Nueva Tarea</span>"+
                            "</div>";
                break;

                case "limite":
                    attr  = 'limite';
                    clase = 'limite';
                    input = "<span>Limite Sistema</span>";
                break;

                default:
                    var name = "Nueva Tarea " + count;
                    clase = 'caso connection';
                    input = "<span>"+name+"</span>"+
                            "<div class='connect'></div>";
                    
                    TabTemplate(name,count);
                break;
            }

            $(" <div attr-type='"+attr+"' style='"+posicion_drop(ui,$(this))+"' id='"+count+"' class='objeto "+clase+"'></div> ").append(input).appendTo(this);
 
            workflow();

        }
    });
    
    function size_editor(){
        var width = 3000;
        var height = 3000;

        $("#contenido_all").width(width).height(height);
        
        $("#editor_width").val(width);
        $("#editor_height").val(height);
        height_editor();
    };

    $( window ).resize(function() {
        height_editor();
    });

    function height_editor(){
        var w_height = $(window).height();
        $("#diagram").height(w_height - 180);
    }


    WindowOpen = function(verb, url, data, target) {
      var form = document.createElement("form");
      form.action = url;
      form.method = verb;
      form.target = target || "_self";
      if (data) {
        for (var key in data) {
          var input = document.createElement("textarea");
          input.name = key;
          input.value = typeof data[key] === "object" ? JSON.stringify(data[key]) : data[key];
          form.appendChild(input);
        }
      }
      form.style.display = 'none';
      document.body.appendChild(form);
      form.submit();
    };
});