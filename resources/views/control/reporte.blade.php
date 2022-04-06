
<div class="container">
	<div class="col-md-12">
		<h1 style="text-align:center; font-family:algeria">
			   <img src="https://previews.123rf.com/images/lemonadeserenade/lemonadeserenade1604/lemonadeserenade160400132/55605301-pila-de-monedas-d%C3%B3lar-un-ejemplo-del-vector-dibujado-a-mano-de-una-pila-de-monedas-de-oro-con-el-sig.jpg" width="60" height="60" class="d-inline-block align-top" alt="">&nbsp;&nbsp;CONTROL DE GASTOS </h1>
<h3  >REPORTE </h3>



		<table class="table table-striped table table-sm" border="1" align="center" cellspacing="1" cellpadding="4">
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
		<tr>
			<th colspan="3">TOTAL:
				<th>INGRESOS:{{$t_ing}}</th>
				<th>EGRESOS:{{$t_egr}}</th>
				<th>SALDO:{{$t_saldo}}</th>
				
				
			</th>
		</tr>
</table>
	</div>
</div>			
					


