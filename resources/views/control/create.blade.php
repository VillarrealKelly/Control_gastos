@extends('layouts.app')
@section('content')
<div class="container col-md-4" >
	<div class="col-md-12" style="margin-top: 25%;">
		<h1 style="font-family:algeria;text-align: center;"><img src="https://salarios.trabajo.gob.ec/imagenes/registroTrabajo.png" width="40px"> Formulario de Control</h1>	 
		<form action="" method="POST">
			@csrf
<div class="container">
	<div class="row">
	<div class="col-md-4">
		

	
			<label for="">CONCEPTO</label>
			<select name="" id="" class="form-control">
			<option value="">Elija una opcion</option>	
			<option value="">Elija una opcion</option>	
			<option value="">Elija una opcion</option>	
			<option value="">Elija una opcion</option>	
			@foreach($tipo as $t)
			<option value="{{$t->tip_id}}"> {{$t->tip_descripcion}} </option>
			@endforeach			

			</select>
			
	</div>	
	</div>
</div>







<!-- 
				<div class="form-group">
					<label for="">Nombre Control</label>
				    <input type="text" name="cat_nombre" id="cat_nombre" class="form-control" placeholder="Escriba el nombre de la categoria">
  				</div>
	  			<div class="form-group">
					<label for="">Descripcion Categoria</label>
				    <input type="text" name="cat_descripcion" id="cat_descripcion" class="form-control" placeholder="Escriba la descripcion de la categoria">
	  			</div>
				<div class="form-group">
					<button class="btn btn-primary"><img src="https://cdn-icons-png.flaticon.com/512/60/60959.png" width="15px"> Registrar</button>
				</div> -->
		</form>
	</div>
</div>	
@endsection