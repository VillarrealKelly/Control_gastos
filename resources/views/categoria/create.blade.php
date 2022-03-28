@extends('layouts.app')
@section('content')
<div class="container col-md-4" >
	<div class="col-md-12" style="margin-top: 25%;">
		<h1 style="font-family:algeria;text-align: center;"><img src="https://salarios.trabajo.gob.ec/imagenes/registroTrabajo.png" width="40px"> Formulario de registro</h1>	 
		<form action="{{route('categoria.store')}}" method="POST">
			@csrf
				<div class="form-group">
					<label for="">Nombre Categoria</label>
						<select name="cat_id" id="cat_id" class="form-control">
						<option value="">Elija una opcion</option>
						@foreach($categoria as $cat)
						<option value="{{$cat->cat_id}}">{{$cat->cat_nombre}}</option>
						@endforeach
					</select>
				    <!-- <input type="text" name="cat_nombre" id="cat_nombre" class="form-control" placeholder="Escriba el nombre de la categoria">
 -->  				</div>
	  			<div class="form-group">
					<label for="">Descripcion Categoria</label>
				    <input type="text" name="cat_descripcion" id="cat_descripcion" class="form-control" placeholder="Escriba la descripcion de la categoria">
	  			</div>
				<div class="form-group">
					<button class="btn btn-primary"><img src="https://cdn-icons-png.flaticon.com/512/60/60959.png" width="15px"> Registrar</button>
				</div>
		</form>
	</div>
</div>	
@endsection