

	const validar=()=>{
		const tip_descripcion=document.querySelector("#tip_descripcion");
		if(tip_descripcion.value.length==0){
					Swal.fire({
  			icon: 'error',
 			title: 'error',
  			text: 'Completa todos los campos',
  			///footer: '<a href="">Why do I have this issue?</a>'
		});
					return false;

		}
	}
	

