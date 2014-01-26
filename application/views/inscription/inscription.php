<div class="container-fluid" style="max-width:920px;margin:0 auto;">
                <div class="row-fluid">
                    <div class="span12">
                         <div class="widget stacked">

                                <div class="widget-header">
                                    <i class="icon-star"></i>
                                    <h3>Inscriptions</h3>
                                </div> <!-- /widget-header -->
            <form id="formusers" action="" method="POST">
                                               <div class="widget-content">
                                
                        <select multiple="multiple" size="10" name="choix_agent[]" class='choix_agent span12'>
                            <?php 
                            $sql = mysql_query("SELECT * FROM users,groupe WHERE categorie = id_groupe ORDER BY nom_users");
                            while ($row = mysql_fetch_array($sql)) {  ?>
                                 <option value="<?php echo $row['id_users']; ?>"><?php echo $row['prenom_users'].' '.$row['nom_users'].' ||   Groupe '.$row['trig_groupe']; ?></option>
                          <?php  } ?>
                            
                          
                           
                        </select>
                    </div>
                </div>
              </div>
                </div>
    <div class="row-fluid">
                    <div class="span12">
                         <div class="widget stacked">

                                          <div class="widget-content">
                                   
                        <select multiple="multiple" size="10" name="choix_formation[]" class='choix_formation span12'>
                            <?php 
                            $auj = date('y-m-d');
                            $sqli = mysql_query("SELECT * FROM formation WHERE  statut_formation = 'disponible' AND date_formation > '$auj' ORDER BY titre_formation");
                            while ($rows = mysql_fetch_array($sqli)) {  ?>
                                 <option value="<?php echo $rows['id_formation']; ?>"><?php echo 'R&eacute;f :'.$rows['ref_formation'].' - '.$rows['titre_formation']; ?></option>
                          <?php  } ?>
                        </select>
                                                                           
                                        
                                        
                                         <button class="btn" value="annuler">Annuler</button>
                                        <button type="submit" class="btn btn-warning"  name="inscription" id="inscription">Valider</button>
                              <form>
                    </div>
                </div>
              </div>
          </div>
</div>
<?php 
if(isset($_POST['inscription'])){
    
    $agents = $_POST['choix_agent'];
    $formations = $_POST['choix_formation'];
       
    
    if(isset($agents) && isset($formations)){
        $agents_count = count($agents);
        $formation_count = count($formations);
       
        $requete = "";
        $requete .= "INSERT INTO suivi_formation (id_suivi, id_formation , id_users, active)  VALUES ";
        
        foreach($agents as $agent){
            foreach($formations as $formation){
                   
             $requete  .=  "('','$formation','$agent','1'),";
         
             }
        }
        $requete_sub = substr($requete,0,-1);
        
        mysql_query($requete_sub);

}
    }
 
?>
