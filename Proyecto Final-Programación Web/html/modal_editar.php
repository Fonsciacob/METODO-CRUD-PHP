<div id="editCursoModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="edit_curso" id="edit_curso">
					<div class="modal-header">						
						<h4 class="modal-title">Editar Curso</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">

						<div class="form-group">
							<label>Nombre</label>
							<input type="text" name="edit_name" id="edit_name" class="form-control" required>
							<input type="text" name="edit_code" id="edit_code" hidden>
						</div>
						
						<div class="form-group">
							<label>Precio</label>
							<input type="text" name="edit_price" id="edit_price" class="form-control" required>

						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-info" value="Guardar datos">
					</div>
				</form>
			</div>
		</div>
	</div>