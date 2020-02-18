<?php require 'header.php'; ?>
    <div class="container">
   <div class="m-5">
        
            <div class="table-title d-flex justify-content-between">
               
                    
						<h2>Gestion  <b>Auteurs</b></h2>
	
						<a href="#addAuteurModal" class="btn btn-success" data-toggle="modal"><span>nouveau Auteur</span></a>					
				
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
												<th>selection</th>
                        <th>Nom complet </th>
                        <th>Email</th>
                        <th>Avatar</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
					 <td>
						<span class="custom-checkbox">
						<input type="checkbox" id="checkbox1" name="options[]" value="1">
						<label for="checkbox1"></label>
						</span>
						</td>
                        <td>Thomas Hardy</td>
                        <td>thomashardy@mail.com</td>
					
                        <td>(171) 555-2222</td>
                        <td>
                            <a href="#editAuteurModal" class="edit" data-toggle="modal"><i class="btn  btn-primary" data-toggle="tooltip" title="Edit">modifier</i></a>
                            <a href="#deleteAuteurModal" class="delete" data-toggle="modal"><i class="btn btn-danger" data-toggle="tooltip" title="Delete">supprimer</i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
			<div >
                
                <ul class="pagination">
                    <li class="page-item"><a href="#" class="page-link">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            
        </div>
    </div>
	<!-- ADD Modal HTML -->
	<div id="addAuteurModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Ajouter Auteur</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nom complet</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Avatar</label>
						 <input type="file"  name="avatr" class="form-control-file border" >
						</div>
										
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="editAuteurModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">modifier auteur </h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>nom complet </label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" required>
						</div>
							<div class="form-group">
							<label>Avatar</label>
						 <input type="file"  name="avatr" class="form-control-file border" >
						</div>				
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteAuteurModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Supprimer Auteur</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php require 'footer.php'; ?>