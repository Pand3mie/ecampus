<?php
session_start();
 include '../config/config.php'; 
 $users = $_SESSION['id'];
 $date = date('Y-m-d');
 parse_str($_REQUEST['sort1'],$sort1); 
 parse_str($_REQUEST['sort2'],$sort2); 

 
 $query =  "SELECT id_choix FROM choix_formation WHERE id_users = '$users' and date_choix = '$date' ";
 $result = mysql_query($query) or die ('Erreur, la Requete n\'a pas aboutie ');
 
 if(mysql_num_rows($result) == 0){
     
     foreach($sort1['entry'] as $key=>$value){
         $insertquery = "INSERT INTO choix_formation (id_choix,choix_formation,position_choix,colonne_choix,id_users,date_choix) VALUES ('','$value','$key','0','$users','$date')";
         mysql_query($insertquery) or die ('Erreur, la Requete n\'a pas aboutie ');
     }
     foreach($sort2['entry'] as $key=>$value){
         $insertquery2= "INSERT INTO choix_formation (id_choix,choix_formation,position_choix,colonne_choix,id_users,date_choix) VALUES ('','$value','$key','1','$users','$date')";
         mysql_query($insertquery2) or die ('Erreur, la Requete n\'a pas aboutie ');
     }
     
 } else {
     
foreach($sort1['entry'] as $key=>$value){
    $updatequery = "UPDATE choix_formation SET  position_choix = '$key', colonne_choix = '0'  WHERE choix_formation = '$value' AND id_users = '$users' ";
    mysql_query($updatequery) or die ('Erreur, la Requete updatequery n\'a pas aboutie ');
    }     
foreach($sort2['entry'] as $key=>$value){
    $updatequery2 = "UPDATE choix_formation SET  position_choix ='$key', colonne_choix = '1'  WHERE choix_formation = '$value' AND id_users = '$users' ";
    mysql_query($updatequery2) or die ('Erreur, la Requete updatequery2 n\'a pas aboutie ');
}          
  }
 
?>
