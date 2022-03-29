
	const validar=()=>{
		const usu_nombre=document.querySelector("#usu_nombre");
		const usu_apellido=document.querySelector("#usu_apellido");
		const usu_cedula=document.querySelector("#usu_cedula");
		const usu_email=document.querySelector("#usu_email");
		const password=document.querySelector("#password");
		if(usu_nombre.value.length==0){
					Swal.fire({
  			icon: 'error',
 			title: 'error',
  			text: 'Completa todos los campos',
  			///footer: '<a href="">Why do I have this issue?</a>'
		});
					return false;

		}
				if(usu_apellido.value.length==0){
					Swal.fire({
  			icon: 'error',
 			title: 'error',
  			text: 'Completa todos los campos',
  			///footer: '<a href="">Why do I have this issue?</a>'
		});
					return false;

		}
				if(usu_cedula.value.length==0){
					Swal.fire({
  			icon: 'error',
 			title: 'error',
  			text: 'Completa todos los campos',
  			///footer: '<a href="">Why do I have this issue?</a>'
		});
					return false;

		}

				if(usu_email.value.length==0){
					Swal.fire({
  			icon: 'error',
 			title: 'error',
  			text: 'Completa todos los campos',
  			///footer: '<a href="">Why do I have this issue?</a>'
		});
					return false;

		}
						if(password.value.length==0){
					Swal.fire({
  			icon: 'error',
 			title: 'error',
  			text: 'Completa todos los campos',
  			///footer: '<a href="">Why do I have this issue?</a>'
		});
					return false;

		}
	}
	
