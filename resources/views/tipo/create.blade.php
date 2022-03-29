@extends('layouts.app')
@section('content')
<script src="{{asset('js/tipo.js')}}"></script>
<div class="container col-md-4" >
	<div class="col-md-12" style="margin-top: 25%;">
		<h1 style="font-family:algeria;text-align: center;"><img src="https://salarios.trabajo.gob.ec/imagenes/registroTrabajo.png" width="40px"> Formulario de nuevo</h1>	 
		<form action="{{route('tipo.store')}}" method="POST" onsubmit="return validar()">
			@csrf
<div class="container">
	<div class="row">
	<div class="col-md-8">
		<div class="form-group">
					<label for="">Nueva descripción</label>
				    <input type="text" name="tip_descripcion" id="tip_descripcion" class="form-control" placeholder="Escriba la descripcion ">
	  			</div>
	  			<div class="form-group">
					<button type="submit" class="btn btn-primary"><img src="https://cdn-icons-png.flaticon.com/512/60/60959.png" width="15px"> Registrar</button>
				</div>

		

	
			
	</div>	
	</div>
</div>



		</form>
	</div>
</div>	
@endsection