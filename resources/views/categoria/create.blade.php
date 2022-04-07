@extends('layouts.app')
@section('content')
<script src="{{asset('js/categoria.js')}}"></script>


<div class="container col-md-4" >
	<div class="col-md-12" style="margin-top: 25%;">
		<h1 style="font-family:algeria;text-align: center;"><img src="https://salarios.trabajo.gob.ec/imagenes/registroTrabajo.png" width="40px"> Formulario de registro</h1>	 
		<form action="{{route('categoria.store')}}" method="POST" onsubmit="return validar()">
			@csrf
				<div class="form-group">
					<label for="">Nombre Categoria</label>
						<select name="cat_nombre" id="cat_nombre" class="form-control">
						
						<option disabled="">Seleccione una categoria</option>
						<option value="1">Ingreso</option>
						<option  value="2">Egreso</option>
				
					
					</select>
				    <!-- <input type="text" name="cat_nombre" id="cat_nombre" class="form-control" placeholder="Escriba el nombre de la categoria">
 -->  				</div>
	  			<div class="form-group">
					<label for="">Descripcion Categoria</label>
				    <input type="text" name="cat_descripcion" id="cat_descripcion" class="form-control" placeholder="Escriba la descripcion de la categoria">
	  			</div>
				<div class="form-group">
					<button  type="submit" class="btn btn-primary"><img src="https://cdn-icons-png.flaticon.com/512/60/60959.png" width="15px"> Registrar</button>
				</div>
		</form>
	</div>
</div>	
@endsection