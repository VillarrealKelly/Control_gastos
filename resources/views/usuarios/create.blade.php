@extends('layouts.app')
@section('content')
<script src="{{asset('js/usuario.js')}}"></script>
<div class="container col-md-4" >
	<div class="col-md-12" style="margin-top: 2%;">
		<h3 style="font-family:algeria;text-align: center;"><img src="https://salarios.trabajo.gob.ec/imagenes/registroTrabajo.png" width="40px"> Formulario de registro de Usuarios</h3>
		 <form action="{{route('usuarios.store')}}" method="POST" onsubmit="return validar()">
			@csrf
				<div class="form-group">
					<label for="">Nombre:</label>
				    <input type="text" name="usu_nombre" id="usu_nombre" class="form-control" placeholder="Escriba su nombre">
  				</div>
	  			<div class="form-group">
					<label for="">Apellido:</label>
				    <input type="text" name="usu_apellido" id="usu_apellido" class="form-control" placeholder="Escriba su apellido">
	  			</div>
	  			<div class="form-group">
					<label for="">Email:</label>
				    <input type="email" name="usu_email" id="usu_email" class="form-control" placeholder="Escriba su email">
	  			</div>
	  			<div class="form-group">
					<label for="">Cedula: </label>
				    <input type="text" name="usu_cedula" id="usu_cedula" class="form-control" placeholder="Escriba su numero de cedula" maxlength="10">
	  			</div>
	  			<div class="form-group">
					<label for="">Contraseña: </label>
				    <input type="password" name="password" id="password" class="form-control" placeholder="Escriba su contraseña">
	  			</div>
				<div class="form-group">
					<button   type="submit" class="btn btn-primary"><img src="https://cdn-icons-png.flaticon.com/512/60/60959.png" width="15px"> Registrar</button>
				</div>
		</form> 
	</div>
</div>	
@endsection