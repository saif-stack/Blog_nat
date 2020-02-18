<?php 
include('connexion.php');
// ajout categorie
    
if(isset($_POST['ajoutCategorie'])){
   
    // chargement de donnes de form
     $name=$_POST['name'];
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
       $fileDestination="img_cat/".$fileNameNew;
       move_uploaded_file($fileTmp_name,$fileDestination);
       $message= "ajout avec succès";
         }
     
     }else{
         $message= "Format non prise en charge";
     }
     $req = $conn->prepare('INSERT INTO  `categorie` (`ID`, `name`, `img`)   VALUES (NULL,:name, :img )');
     $req->execute(array(
     'name' => $name,
     
     'img' => $fileDestination
     ));
 
 echo 'catégorie Ajouter ';
 }
?>