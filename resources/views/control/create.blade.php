@extends('layouts.app')
@section('content')
<script src="{{asset('js/control.js')}}"></script>

<div class="container col-md-4" >
	<div class="col-md-12" style="margin-top: 15%;">
		<h1 style="font-family:algeria;text-align: center;"><img src="https://salarios.trabajo.gob.ec/imagenes/registroTrabajo.png" width="40px"> Formulario de registro</h1>	 
		<form action="{{route('control.store')}}" method="POST" onsubmit="return validar()" >
			@csrf
			<div class="row">
				<div class="col-md-6">
					<label for="">Categoria</label>
					<select name="cat_id" id="cat_id" class="form-control">
						<option value="">Elija una opcion</option>
						@foreach($categoria as $cat)
						<option value="{{$cat->cat_id}}">{{$cat->cat_nombre}}</option>
						@endforeach
					</select>
  				</div>
  				<div class="col-md-6">
					<label for="">Tipo</label>
					<select name="tip_id" id="tip_id" class="form-control">
						<option value="">Elija una opcion</option>
						@foreach($tipo as $tip)
						<option value="{{$tip->tip_id}}">{{$tip->tip_descripcion}}</option>
						@endforeach
					</select>
  				</div>
  				<div class="col-md-12">
					<label for="">Descripcion</label>
					<input type="text" name="con_descripcion" id="con_descripcion" class="form-control" placeholder="Escriba la descripcion">
  				</div>
  				<div class="col-md-12">
					<label for="">Cantidad</label>
					<input type="number" name="con_cantidad" id="con_cantidad" class="form-control" placeholder="Escriba la cantidad">
  				</div>
  				<div class="col-md-12">
					<label for="">Fecha</label>
					<input type="date" name="con_fecha" id="con_fecha" class="form-control" >
  				</div>
  				<div class="col-md-4" style="margin-top: 2%;">
					<button type="submit" class="btn btn-primary"><img src="https://cdn-icons-png.flaticon.com/512/60/60959.png" width="15px"> Registrar</button>
				</div>
			</div>
		</form>
	</div>
</div>	
@endsection