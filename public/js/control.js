
	const validar=()=>{
		const con_cantidad=document.querySelector("#con_cantidad");
		const con_fecha=document.querySelector("#con_fecha");
		const usu_id=document.querySelector("#usu_id");
		const cat_id=document.querySelector("#cat_id");
		const tip_id=document.querySelector("#tip_id");
		if(con_cantidad.value.length==0){
					Swal.fire({
  			icon: 'error',
 			title: 'error',
  			text: 'Completa todos los campos',
  			///footer: '<a href="">Why do I have this issue?</a>'
		});
					return false;

		}
				if(con_fecha.value.length==0){
					Swal.fire({
  			icon: 'error',
 			title: 'error',
  			text: 'Completa todos los campos',
  			///footer: '<a href="">Why do I have this issue?</a>'
		});
					return false;

		}
				if(usu_id.value.length==0){
					Swal.fire({
  			icon: 'error',
 			title: 'error',
  			text: 'Completa todos los campos',
  			///footer: '<a href="">Why do I have this issue?</a>'
		});
					return false;

		}
				if(cat_id.value.length==0){
					Swal.fire({
  			icon: 'error',
 			title: 'error',
  			text: 'Completa todos los campos',
  			///footer: '<a href="">Why do I have this issue?</a>'
		});
					return false;

		}
				if(tip_id.value.length==0){
					Swal.fire({
  			icon: 'error',
 			title: 'error',
  			text: 'Completa todos los campos',
  			///footer: '<a href="">Why do I have this issue?</a>'
		});
					return false;

		}
	}
	
