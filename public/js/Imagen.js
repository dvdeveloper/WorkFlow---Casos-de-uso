$(function(){
	$( ".btn_img" ).button().click(function( event ) {

		$('a[href=#diagram]').tab('show');
		$("#diagram").css('overflow','visible');
		
		html2canvas($('.content_graph'), {
			logging:false,
		  	onrendered: function(canvas) {

		  		var img = generate_img(canvas);
		  		WindowOpen('POST','generate/png',{ data: img },'_blank');
		  	}
		});

	});

	generate_img = function(canvas){
		var svgTags = $('.content_graph > svg');
		var canvas_link = document.createElement('canvas');
		
		var maxTop = Math.max.apply(null, $(".objeto").map(function ()
		{
		    return $(this).position().top + $(this).height() + 100;
		}).get());

		var maxLeft = Math.max.apply(null, $(".objeto").map(function ()
		{
		    return $(this).position().left + $(this).width() + 100;
		}).get());


		canvas_link.height = maxTop;
		canvas_link.width = maxLeft;

		var ctx = canvas_link.getContext('2d');

		for(var i = 0; i < svgTags.length; i++){
		    var svgNode = svgTags[i].cloneNode(true);
		    var top		= svgNode.style.top;
		    var left 	= svgNode.style.left;
		 
		    var div 	= document.createElement('div');
		    div.appendChild(svgNode);
		    var svgTag 	= div.innerHTML;
		    ctx.drawSvg(svgTag, left, top);
		};
		ctx.fillText("www.dvdeveloper.com",maxLeft - 120 ,maxTop - 10);
		ctx.drawImage(canvas,0,0);

		$("#diagram").css('overflow','auto');
    	return canvas_link.toDataURL();
	}

	$(".btn_img").button({
		icons: {
			primary: "ui-icon-locked"
		}
	});
});