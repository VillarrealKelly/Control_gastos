@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-md-12">
		<h1 style="font-family:algeria">CONTROL
		<a href="{{route('control.create')}}" class="btn btn-success">
		<img src="https://cdn-icons-png.flaticon.com/512/32/32360.png" width="20px"> Nueva Control</a>
		</h1>
		<form action="{{route('control.search')}}" method="POST">
		@csrf
		Desde: <input type="date" name="desde">
		Hasta: <input type="date" name="hasta">
		<button class="btn btn-success"> Buscar</button>			
		</form>



		<table class="table table-striped table table-sm">
		<th style="text-align:center;">#</th>
		<th style="text-align:center;">USUARIO</th>
		<th style="text-align:center;">CATEGORIA</th>
		<th style="text-align:center;">TIPO</th>
		<th style="text-align:center;">CANTIDAD</th>
		<th style="text-align:center;">FECHA</th>
	<?php
		$t_ing=0;
		$t_egr=0;
		$t_saldo=0;
	?>
		@foreach($control as $con)

		<?php
		if ($con->cat_id==2){
		$t_ing+=$con->con_cantidad;
		}

		if ($con->cat_id==1){
		$t_egr+=$con->con_cantidad;
		}
		$t_saldo=$t_ing-$t_egr;

		?>
 <tr>
     	<td style="text-align:center">{{$loop->iteration}}</td>
		<td style="text-align:center">{{$con->usu_apellido}}</td>
		<td style="text-align:center">{{$con->cat_nombre}}</td>
		<td style="text-align:center">{{$con->tip_descripcion}}</td>
		<td style="text-align:center">{{$con->con_cantidad}}</td>
		<td style="text-align:center">{{$con->con_fecha}}</td>


     <td>
					<div class="row">
					<a href="{{route('control.edit',$con->con_id)}}" class="btn btn-info  btn-sm" title="Editar" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
  
 					<path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
					</svg></a>
			                    
                    <form action="{{route('control.destroy',$con->con_id)}}" method="POST" onsubmit="return confirm('Desea eliminar')">
                    	@csrf
                     
                    	<button type="submit" class="btn btn-danger">
                    		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
								<path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
							</svg>
                    	</button>
                    </form>
					</div>
			
				</td>



     </tr>
		@endforeach
		<tr>
			<th colspan="2">TOTALES:
				<th>INGRESOS:{{$t_ing}}</th>
				<th>EGRESOS:{{$t_egr}}</th>
				<th>SALDO:{{$t_saldo}}</th>
				
				
			</th>
		</tr>
</table>		
					
 			
                    
	</div>
</div>	
@endsection
