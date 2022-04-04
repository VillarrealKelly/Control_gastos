<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



<div class="container">
	<div class="col-md-12">
		<h1 style="text-align:center; font-family:algeria">
			   <img src="https://wallo.com/media/aplicacion-control-gastos-android.png" width="30" height="30" class="d-inline-block align-top" alt="">&nbsp;&nbsp;CONTROL DE GASTOS </h1>
<h3  >REPORTE </h3>



		<table class="table table-striped table table-sm" >
		<th style="text-align:center;" >#</th>
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

		@endforeach
<!-- 		<tr>
			<th colspan="3">TOTAL:
				<th>INGRESOS:{{$t_ing}}</th>
				<th>EGRESOS:{{$t_egr}}</th>
				<th>SALDO:{{$t_saldo}}</th>
				
				
			</th>
		</tr> -->
</table>
	</div>
</div>			
					


