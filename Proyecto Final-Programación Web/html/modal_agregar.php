<div id="addCursoModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="add_curso" id="add_curso">
					<div class="modal-header">						
						<h4 class="modal-title">Agregar Curso</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Código</label>
							<input type="text" name="code"  id="code" class="form-control" required>
							
                        </div>
                        
						<div class="form-group">
							<label>Nombre</label>
							<input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        
						<div class="form-group">
							<label>Precio</label>
							<input type="text" name="price" id="price" class="form-control" required>
                        </div>
                        			
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Guardar datos">
					</div>
				</form>
			</div>
		</div>
	</div>