$(function(){
	$( ".btn_generate" ).button().click(function( event ) {
		$('a[href=#diagram]').tab('show');
		html2canvas($('.content_graph'), {
			logging:true,
		  	onrendered: function(canvas) {
		  		var img = generate_img(canvas);
		  		WindowOpen('POST','generate',{ data: {json:generate_json(), imagen: img} },'_blank');
		  	}
		});
		
	});

	
});