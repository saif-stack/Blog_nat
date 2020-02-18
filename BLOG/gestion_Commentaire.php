<?php
include('connexion.php');
$id=intval( $_POST['ID_ART']);
//$id_com=intval( $_POST['ID_COM']);
echo $id;
//echo $id_com;




// ajout commentaire 

 if(isset($_POST['ajoutComentaire'])){
   
    // chargement de donnes de form
     $name=$_POST['nom'];
     $contenu=$_POST['contenu'];
    // $id = intval($_POST['id']);
     echo $name;
      echo $contenu;
    echo $id;
   
    $req = $conn->prepare('INSERT INTO  `commantaire` (`ID`, `nikname`, `contenu`, `ID_ART`)   VALUES (NULL,:nikname, :contenu,:ID_ART )');
    
     $req->execute(array(
     'nikname' => $name,
     'contenu' => $contenu,
     'ID_ART'=>$id
     ));
 
     header("Location:post.php?ID_ART=".$id);   /*Redirection du navigateur */

 }

 // suupression  commentaire 

 if(isset($_POST['supComentaire'])){
  
$idcom=intval( $_POST['ID_COM']);

echo $idcom;
 $post = $conn->prepare('DELETE FROM commantaire WHERE ID=?');
$post->execute(array($idcom));

header("Location:post.php?ID_ART=".$id);   /*Redirection du navigateur */
 
}

?>