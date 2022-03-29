

	const validar=()=>{
		const cat_descripcion=document.querySelector("#cat_descripcion");
		if(cat_descripcion.value.length==0){
					Swal.fire({
  			icon: 'error',
 			title: 'error',
  			text: 'Completa todos los campos',
  			///footer: '<a href="">Why do I have this issue?</a>'
		});
					return false;

		}
	}
	

