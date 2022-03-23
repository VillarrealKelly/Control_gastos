@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-md-12">
		<h1 style="font-family:algeria">Movimientos 
		<a href="{{route('control.create')}}" class="btn btn-success">
		<img src="https://cdn-icons-png.flaticon.com/512/32/32360.png" width="20px"> Nueva Control</a>
		</h1>
<table class="table">
	<th>#</th>
	<th>TIPO</th>
	<th>CONCEPTO</th>
	<th>FECHA</th>
	<th>DETALLE</th>
	<th>CANTIDAD</th>
	<th>ACCIONES</th>
</table>		
					
 			
                    
	</div>
</div>	
<!-- <a href="{{route('control.create')}}" class="btn btn-primary btn-sm">NUEVO</a>
<table class="table">
	<th>#</th>
	<th>TIPO</th>
	<th>CONCEPTO</th>
	<th>FECHA</th>
	<th>DETALLE</th>
	<th>CANTIDAD</th>
	<th>ACCIONES</th>
</table> -->
@endsection
