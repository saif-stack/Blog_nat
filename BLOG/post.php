
<?php require 'header.php'; 
include('connexion.php');
$id=intval( $_GET['ID_ART']);
echo $id;
$article = $conn->prepare('SELECT  contenu,article.ID, title , img, date_publication,auteur.full_name FROM article JOIN auteur ON article.ID_AUT = auteur.ID WHERE article.ID= ?');
$article->execute(array($id));



?>/*
  <!-- Page Content -->
  <div class="container">

    <div class="row">
 <?php while ($articleS = $article->fetch()) {  ?>
      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4"><?php echo $articleS['title'] ?></h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#"><?php echo $articleS['full_name'] ?></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on <?php echo $articleS['date_publication'] ?></p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="<?php echo $articleS['img'] ?>" alt="">

        <hr>

        <!-- Post Content -->  

        <p><?php echo $articleS['contenu'] ?></p>


  <?php } ?>
        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Ajouter un commentaire:</h5>
          <div class="card-body">
           <form method="POST" action="gestion_Commentaire.php">
              <div class="form-group">
                   <label for="title">Nom : <span class="require">*</span></label>
                   <input class="form-control" rows="3" name="nom">
                 </div>
              <div class="form-group">
                <textarea class="form-control" rows="3" name="contenu"></textarea>
              </div>
              <input type="hidden" name="ID_ART" value="<?php echo $id?>">
              <button type="submit" class="btn btn-primary" name="ajoutComentaire" >Ajouter</button>
            </form>
          </div>
        </div>
<!-- charegemnt des commentaire de cette article ---->
<?php 
            $commentaires = $conn->prepare('SELECT * FROM `commantaire` WHERE ID_ART= ?');
      $commentaires->execute(array($id));
            
?>
        <!-- Single Comment -->
        <?php while ($commentaire = $commentaires->fetch()) {  ?>

          <form method="POST" action="gestion_Commentaire.php"> 
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0"><?php echo $commentaire['nikname'] ?></h5>
            <?php echo $commentaire['contenu'] ?>
          </div>
          <input type="hidden" name="ID_ART" value="<?php echo $id?>">
          <input type="hidden" name="ID_COM" value="<?php echo $commentaire['ID']?>">
          <div class="media-footer">
            <button class="btn btn-danger" name="supComentaire">  supprimer</button>
          </div>
        </div>
     </form> 
  <?php }?>

       

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Ajouter  Widget -->
        <div class="card my-4">
          <h5 class="card-header"><a class="btn btn-secondary" type="button" href="addpost.php"> Ajouter </a>
         
        </div>

        <!-- Modifier Widget -->
        <div class="card my-4">
          <h5 class="card-header"><a class="btn btn-secondary" type="button" href="updatepost.php"> Modifier </a>
        </div>

        <!-- Supprimer Widget -->
        <div class="card my-4">
          <h5 class="card-header"><button class="btn btn-secondary" type="button"> Supprimer </button>
          
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->*/
<?php require 'footer.php'; ?>