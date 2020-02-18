<?php require 'header.php'; ?>
<div class="container">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Update post</h1>
    		
    		<form action="" method="POST"><!--form-->
    		    
    		    
    		    <!--Titre-->
    		    <div class="form-group">
    		        <label for="title">Title <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="titre" />
    		    </div>
    		    <!--contenu-->
    		    <div class="form-group">
    		        <label for="description">Contenu</label>
    		        <textarea rows="5" class="form-control" name="contenu" ></textarea>
    		    </div>
    		    
    		   
    		    
    		   <!--Image-->
                <div class="form-group ">
                    <label for="title">Image <span class="require"><small>-required fields</small></span></label>
                    
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="customFile" name="filename">
                        <label class="custom-file-label" for="customFile">image</label>
                      </div>
               </div>

               <div class="form-group row">
                <label for="example-date-input">Date</label>
                
                  <input class="form-control" type="date" value="2011-08-19" name="date" id="example-date-input">
                
              </div>
               <!--categorie-->
                <div class="form-group">
    		        <label for="description">Catégorie</label>
                    <select name="idCAT" class="custom-select mb-3">
                        <option selected>selectionner  la catégorie </option>
                        <option value="volvo">Volvo</option>
                        <option value="fiat">Fiat</option>
                        <option value="audi">Audi</option>
                      </select>
                </div>
                <!--Auteur-->
                <div class="form-group">
    		        <label for="description">Auteur </label>
                    <select name="idAUT" class="custom-select mb-3">
                        <option selected>selectionner l'auteur </option>
                        <option value="volvo">Volvo</option>
                        <option value="fiat">Fiat</option>
                        <option value="audi">Audi</option>
                      </select>
                </div>
                <!--Botton-->
                <div class="form-group">
    		        <button type="submit" class="btn btn-primary">
    		            update
    		        </button>
    		      <a class="btn btn-secondary"  href="article.php"> cancel</a>
                </div>
    		</form> <!--/form-->
		</div>
		
	</div>
</div>

<?php require 'footer.php'; ?>