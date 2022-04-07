@extends('layouts.app')
@section('content')
<div class="container col-md-4" >
	<div class="col-md-12" style="margin-top: 25%;">
		<h1 style="font-family:algeria;text-align: center;"><img src="https://salarios.trabajo.gob.ec/imagenes/registroTrabajo.png" width="40px"> Formulario de registro</h1>	 
		<form action="{{route('control.update',$control->con_id)}}" method="POST">
			@csrf
<div class="container">
			<div class="row">
				<div class="col-md-6">
					<label for="">Categoria</label>
					<select  value="{{$control->cat_id}}" name="cat_id" id="cat_id" class="form-control">
						<option disabled >Seleccione una categoria</option>
						<option  value="1">Ingreso</option>
						<option value="2">Egreso</option>
					</select>
  				</div>
  				<div class="col-md-6">
					<label for="">Tipo</label>
					<select   name="tip_id" id="tip_id" class="form-control">
						<option value="">Elija una opcion</option>
						@foreach($tipo as $tip)
						<option value="{{$tip->tip_id}}">{{$tip->tip_descripcion}}</option>
						@endforeach
					</select>
  				</div>
  				<div class="col-md-12">
					<label for="">Descripcion</label>
					<input   value="{{$control->cat_descripcion}}" type="text" name="cat_descripcion" id="cat_descripcion" class="form-control" placeholder="Escriba la descripcion">
  				</div>
  				<div class="col-md-12">
					<label for="">Cantidad</label>
					<input   value="{{$control->con_cantidad}}" type="number" name="con_cantidad" id="con_cantidad" class="form-control" placeholder="Escriba la cantidad">
  				</div>
  				<div class="col-md-12">
					<label for="">Fecha</label>
					<input  value="{{$control->con_fecha}}" type="date" name="con_fecha" id="con_fecha" class="form-control" >
  				</div>
  				<div class="col-md-4" style="margin-top: 2%;">
					<button type="submit" class="btn btn-primary"><img src="https://cdn-icons-png.flaticon.com/512/60/60959.png" width="15px"> Registrar</button>
				</div>
			</div>
</div>

		</form>
	</div>
</div>	
@endsection