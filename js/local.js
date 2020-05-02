// sweet alert 

$('.msg').ready(()=>{

	let ok = $("#msg").text();
	let rol = $("#condition").text();
	
		if(rol == 11){
			Swal.fire(
					'',
					ok,
					'info'
				)	
		}			                     	
});
