(function($){
	$("#forma").submit(function(ev){
		ev.preventDefault();
		$.ajax({
			url:'login/validate',
			type: 'POST',
			data: $(this).serialize(),
			success: function(data){
				var json = JSON.parse(data);
				if(Object.keys(json.rut).length){
					alert(json.rut);
				}
				if(Object.keys(json.password).length){
					alert(json.password);
				}
			},
			error: function(){
				alert("error");
			},
		});
	});
})(jQuery)
