
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>add post</title>
</head>
<body>



<div class="container">
	<div class="row">
	    
	    <div class="col-md-8 col-md-offset-2">
	        
    		<h1>Create catégorie</h1>
    		
    		<form  method="POST" action="traitement.php"  enctype="multipart/form-data"><!--form-->

    		    <!--Name-->
    		    <div class="form-group">
    		        <label for="title">Name <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="name" />
    		    </div>
    		  
    		    <!--Image-->
               
				<div class="form-group">
               <label for="customFile">image</label>
                 <input type="file"  name="image" class="form-control-file border" >
               </div>

              
              
               <!--Botton-->
			   <div class="form-group">
    		        <button type="submit" class="btn btn-primary" name="ajoutCategorie"> Create   </button>
    		       
    		        <a class="btn btn-secondary"  href="article.php"> cancel</a>
                </div>
    		</form> <!--/form-->
		</div>
		
	</div>
</div>


</body>
</html>

