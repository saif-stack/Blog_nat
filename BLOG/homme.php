
<?php require 'header.php'; 
include('connexion.php');
$articles = $conn->query('SELECT SUBSTR(contenu, 1, 100) contenu,article.ID, title , img, date_publication,auteur.full_name FROM article JOIN auteur ON article.ID_AUT = auteur.ID');

?>



    <div class="page-content">
	    <div class="container">
		    <div class="docs-overview py-5">
			    <div class="row justify-content-center">
				   
                <?php  while ($article = $articles->fetch()){   ?>
              <div class="col-12 col-lg-4 py-3"><!--//col-->
              <div class="card shadow-sm">
						  <img class="card-img-top" src="<?php echo $article['img'] ?>" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title"><?php echo $article['title'] ?></h2>
            <p class="card-text"><?php echo $article['contenu'] ?></p>
            <!-- envoi vres post avec l'article selectionner-->
            <a href="post.php?ID_ART=<?php echo $article['ID'] ?>" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            <?php echo $article['date_publication'] ?>
            <a href="#"> by <?php echo $article['full_name'] ?></a>
          </div>
        
					    </div><!--//card-->
				    </div><!--//col-->
				   <?php }?>
				  
			    </div><!--//row-->
		    </div><!--//container-->
		</div><!--//container-->
    </div><!--//page-content-->
    <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

<?php require 'footer.php'; ?>
