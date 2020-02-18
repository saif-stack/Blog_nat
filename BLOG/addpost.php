<?php require 'header.php'; 
include('connexion.php');

//  recuperation des Article et categorie
$categorie = $conn->query('SELECT ID ,name from categorie');
$auteur = $conn->query('SELECT ID,full_name from auteur');
?>
<div class="container">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Create post</h1>
    		
    		<form  method="POST" action="gestion_Articles.php"  enctype="multipart/form-data"><!--form-->
    		    
    		    
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
               
               <div class="form-group">
               <label for="customFile">image</label>
                 <input type="file"  name="image" class="form-control-file border" >
               </div>
               <!--categorie-->
                <div class="form-group">
    		        <label for="description">Catégorie</label>
                    <select name="idCAT" class="custom-select mb-3">
                        <option selected>selectionner  la catégorie </option>
                        
                        <?php while ($cat = $categorie->fetch()){  echo '<option value='.$cat['ID'].'>'.$cat['name'].'</option>';}?>
                        
                      </select>
                </div>
                <!--Auteur-->
                <div class="form-group">
    		        <label for="description">Auteur </label>
                    <select name="idAUT" class="custom-select mb-3">
                        <option selected>selectionner l'auteur </option>
                        <?php while ($aut = $auteur->fetch()){  echo '<option value='.$aut['ID'].'>'.$aut['full_name'].'</option>';}?>
                     </select>
                </div>
            
                <!--Botton-->
                <div class="form-group">
    		        <button type="submit" class="btn btn-primary" name="ajoutpost"> Create   </button>
    		       
    		        <a class="btn btn-secondary"  href="article.php"> cancel</a>
                </div>
    		</form> <!--/form-->
		</div>
		
	</div>
</div>

<?php require 'footer.php'; ?>