<?php
    include_once("../Modelo/conexion.php");
	
	$action=(isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action=='ajax'){

		include_once("../Modelo/modelo.php");
    
		$Cursos = new Cursos;
		$lista=$Cursos->Vista();
	
		$list_json=json_encode($lista);
	
		$list_json_decode=json_decode($list_json);
?>

    <div class="table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th class='text-center'>Código</th>
						<th class="text-center">Curso</th>
						<th class="text-center">Precio</th>
						<th></th>
					</tr>
				</thead>
				<tbody>	
						<?php 
						foreach ($list_json_decode as $Dates) {
                            
							$prod_code=$Dates[0];
							$prod_name=$Dates[1];
							$price=$Dates[2];						
						?>	
						<tr class="<?php echo $text_class;?>">
							<td class='text-center'><?php echo $prod_code;?></td>
							<td class="text-center" ><?php echo $prod_name;?></td>
							<td class='text-center'><?php echo number_format($price,2);?></td>
							<td>
							<a href="#"  data-target="#editCursoModal" class="edit" data-toggle="modal" data-code="<?php echo $prod_code;?>" data-name="<?php echo $prod_name?>" data-price="<?php echo $price;?>"><i class="material-icons" data-toggle="tooltip" title="Editar" >&#xE254;</i></a>
							<a href="#deleteCursoModal" class="delete" data-toggle="modal" data-id="<?php echo $prod_code;?>"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
                    		</td>
                        </tr>
                    <?php 
                    }
                    ?>
				</tbody>			
			</table>
		</div>	
<?php 
  }
?>