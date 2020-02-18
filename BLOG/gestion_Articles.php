<?php 

include('connexion.php');

/*******************************insertion ********************************************/






// ajout Post
    
if(isset($_POST['ajoutpost'])){
   
   // chargement de donnes de form
    $titre=$_POST['titre'];
    $econtenu=$_POST['contenu'];
    $file=$_FILES['image'];
    $categorie= intval($_POST['idCAT']);
    $auteur=intval($_POST['idAUT']);
    // chargement image
    $message='';   // message 
    $fileName=$_FILES['image']['name'];
    $fileType=$_FILES['image']['type'];
    $fileTmp_name=$_FILES['image']['tmp_name'];
    $fileError=$_FILES['image']['error'];
    $fileSize=$_FILES['image']['size'];
    $fileEXT=explode('.',$fileName);
    $fileatualEXT =strtolower(end($fileEXT));
    $aload = array('jpg','jpeg','png');
    if(in_array($fileatualEXT,$aload)){
        if($fileError=== 0){
      $fileNameNew =uniqid('', true).".".$fileatualEXT;
      $fileDestination="img_art/".$fileNameNew;
      move_uploaded_file($fileTmp_name,$fileDestination);
      $message= "ajout avec succès";
        }
    
    }else{
        $message= "Format non prise en charge";
    }
    
    echo $titre."<br>".$econtenu."<br>".$fileDestination."<br>".$categorie."<br>".$auteur;
   

    $req = $conn->prepare('INSERT INTO  `article` (`ID`, `title`, `contenu`, `img`, `date_publication`, `ID_CAT`, `ID_AUT`)   VALUES (NULL,:title, :contenu, :img, NOW(), :ID_CAT,:ID_AUT )');
    $req->execute(array(
    'title' => $titre,
    'contenu' => $econtenu,
    'img' => $fileDestination,
    'ID_CAT' => $categorie,
    'ID_AUT' => $auteur
    ));

 header('Location:homme.php');
}

