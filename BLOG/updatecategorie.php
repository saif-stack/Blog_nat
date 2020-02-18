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
	        
    		<h1>Update Catégirie</h1>
    		
    		<form action="" method="POST"><!--form-->
    		    
    		    
    		    <!--Name-->
    		    <div class="form-group">
    		        <label for="title">Name <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="titre" />
    		    </div>
    		  
    		   <!--Image-->
                <div class="form-group ">
                    <label for="title">Image <span class="require"><small>-required fields</small></span></label>
                    
                    <div class="custom-file mb-3">
                        <input type="file" class="custom-file-input" id="customFile" name="filename">
                        <label class="custom-file-label" for="customFile">image</label>
                      </div>
               </div>

              
              
                <!--Botton-->
                <div class="form-group">
    		        <button type="submit" class="btn btn-primary">
    		            Update
    		        </button>
    		        <button class="btn btn-default">
    		            Cancel
    		        </button>
                </div>
    		</form> <!--/form-->
		</div>
		
	</div>
</div>


</body>
</html>

