@extends('layouts.app')
@section('content')
<div class="container col-md-4" >
	<div class="col-md-12" style="margin-top: 25%;">
		<h1 style="font-family:algeria;text-align: center;"><img src="https://salarios.trabajo.gob.ec/imagenes/registroTrabajo.png" width="40px"> Formulario de registro</h1>	 
		<form action="{{route('control.update',$control->con_id)}}" method="POST">
			@csrf
<div class="container">
	<div class="row">
	<div class="col-md-12">
		

	
			<label for="">CONCEPTO</label>
			<select name="" id="" class="form-control">
		
			@foreach($tipo as $tip)
			<option value="{{$tip->tip_id}}"> {{$tip->tip_descripcion}} </option>
			@endforeach			

			</select>

			<div class="col-md-12">
				<label for="">Fecha:</label>
				<input type="date" class="form-control" id="con_fecha" name="con_fecha">
			</div>
			<div class="col-md-12 p-3">
				Ingreso:<input type="radio" name="cad_id" value="1">
				Egreso:<input type="radio" name="cad_id" value="0">
				
			</div>
			<div class="col-md-12">
				<label for="">CANTIDAD</label>
				<input type="text" class="form-control" id="con_cantidad" name="con_cantidad">
			</div>
			<div class="col-md-12">
				<button class="btn btn-success">Guardar</button>
			</div>
				<div></div>
			
	</div>	
	</div>
</div>

		</form>
	</div>
</div>	
@endsection