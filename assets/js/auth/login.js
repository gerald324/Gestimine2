(function($){
	$("#forma").submit(function(ev){
		ev.preventDefault();
		$.ajax({
			url:'login/validate',
			type: 'POST',
			data: $(this).serialize(),
			success: function(wew){
				var json = JSON.parse(wew);
				window.location.replace(json.url);
			},
			error: function(xhr){
				if(xhr.status == 400){
					var json = JSON.parse(xhr.responseText);
					if(Object.keys(json.rut).length){
						alert(json.rut);
					}
					if(Object.keys(json.password).length){
						alert(json.password);
					}
				}
				else if(xhr.status == 401){
					var json = JSON.parse(xhr.responseText);
					alert(json.msg);
				}
			},
		});
	});
})(jQuery)
