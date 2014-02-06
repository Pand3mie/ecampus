<div class="main">
    <div class="container">
        <div class="row">
            <div class="span6">
                <div class="widget stacked">
                    <div class="widget-header">
                        <i class="icon-globe"></i>
                        <h3>Statistiques</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                        <form id="stat_form" name="stat_form">
                            <div class="control-group">
                                <label class="control-label">Choix du groupe :</label>
                                <div class="controls">
                                    
                                    <form action="" method="post">

                                        <select name="drop_1" id="drop_1">

                                            <option value="" selected="selected" disabled="disabled">Selection...</option>

                                            <?php getTierOne(); ?>

                                        </select> 

                                        <span id="wait_1" style="display: none;">
                                            <img src=" <?php echo img_gif('ajax-loader'); ?>"  alt="Chargement..."  />
                                        </span>
                                        <span id="result_1" style="display: none;"></span> 

                                    </form>

                                </div>
                            </div>
                            <br />
                <button type="submit" id="best" name="best" class="btn" value="Meilleur Note">Meilleur Note</button>
                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->	

            </div> <!-- /span6 -->

           
            <?php if(isset($_GET['submit'])){
                
                 $us = $_GET['agent'];
                 $dr = $_GET['drop_1'];
                 $date1 = $_GET['date1'];
                 $date2 = $_GET['date2'];
                $who = mysql_query("SELECT * FROM users,groupe WHERE id_users = '$us' and id_groupe = '$dr' ");
                $reponse = mysql_fetch_array($who);
                
                if($_GET['drop_1']== 'all_groups'  && $_GET['agent']== 'all_users'){?>
                  
                       <div class="span6">

                            <div class="widget stacked">

                                <div class="widget-header">
                                    <i class="icon-star"></i>
                                    <h3>Statistique Groupes entre le <?php echo date('d/m/Y',  strtotime($date1)).' et le '.date('d/m/Y',  strtotime($date2)) ?> </h3>
                                </div> <!-- /widget-header -->
                                <div class="widget-content">
                                   <?php 
                                   $sql = mysql_query("SELECT * FROM choix_formation,formation WHERE date_choix BETWEEN '$date1' AND '$date2' AND colonne_choix = '0' AND choix_formation = id_formation ORDER BY position_choix DESC LIMIT 3");
                                   $i = 1;
                                   while($rep = mysql_fetch_array($sql)){
                                        if($i == 1){
                                        echo '<img src="assets/img/trophy.png" ><span class="countstat">'.$i.'<SUP style="font-size:13px">er</SUP></span></img>';
                                    }elseif($i == 2){
                                        echo '<img src="assets/img/trophy.png" ><span class="countstat">'.$i.'<SUP style="font-size:10px">éme</SUP></span></img>';
                                    }elseif($i== 3){
                                         echo '<img src="assets/img/trophy.png" ><span class="countstat">'.$i.'<SUP style="font-size:10px">éme</SUP></span></img>';
                                    }else{
                                         echo '<SUP>éme</SUP>';
                                         echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                                    }
                                    
                                  echo  '   '.$rep['titre_formation'].'  || Réf : '.$rep['ref_formation'];
                                        
                                       echo'<br>';
                                       $i++;
                                   }
                                  
                                   ?>
                                    <div id="graph-stat"></div>
                                </div> <!-- /widget-content -->

                            </div> <!-- /widget -->	

                        </div> <!-- /span6 -->
    
     
               <?php }   elseif($_GET['drop_1'] == 'all_groups' && $_GET['agent'] != 'all_users'){?>
                    
                           <div class="span6">

                            <div class="widget stacked">

                                <div class="widget-header">
                                    <i class="icon-star"></i>
                                    <h3>Statistique de <?php echo utf8_encode($reponse['nom_users'].' '.$reponse['prenom_users']); ?>entre le <?php echo date('d/m/Y',  strtotime($date1)).' et le '.date('d/m/Y',  strtotime($date2)) ?> </h3>
                                </div> <!-- /widget-header -->
                                <div class="widget-content">
 <?php 
 
                                    $id = $_GET['agent'];
                                    $sql = mysql_query("SELECT * FROM choix_formation,formation WHERE date_choix BETWEEN '$date1' AND '$date2' AND colonne_choix = '0' AND choix_formation = id_formation AND id_users = '$id' ORDER BY position_choix DESC LIMIT 3");
                                    $count = mysql_num_rows($sql);
                                   if($count == 0){
                                       Echo 'Aucune Statistiques pour cette période';
                                   }else{
                                    $i = 1;
                                   while($rep = mysql_fetch_array($sql)){
                                  
                                    if($i == 1){
                                         echo '<img src="assets/img/trophy.png" ><span class="countstat">'.$i.'<SUP style="font-size:13px">er</SUP></span></img>';
                                    }elseif($i == 2){
                                         echo '<img src="assets/img/trophy.png" ><span class="countstat">'.$i.'<SUP style="font-size:10px">éme</SUP></span></img>';
                                    }elseif($i== 3){
                                        echo '<img src="assets/img/trophy.png" ><span class="countstat">'.$i.'<SUP style="font-size:10px">éme</SUP></span></img>';
                                    }
                                    
                                  echo  '   '.$rep['titre_formation'].'  || Réf : '.$rep['ref_formation'];
                                     
                                       echo'<br>';
                                       $i++;
                                   }
                                   }
                                   ?>
                                
                                    <div id="graph-stat"></div>
                                </div> <!-- /widget-content -->

                            </div> <!-- /widget -->	

                        </div> <!-- /span6 -->
    
                   
                    
               <?php } elseif($_GET['drop_1'] !='all_groups' && $_GET['agent'] == 'all_users'){?>
                
                      <div class="span6">

                            <div class="widget stacked">

                                <div class="widget-header">
                                    <i class="icon-star"></i>
                                    <h3>Statistique du groupe : <?php echo utf8_encode($reponse['trig_groupe']); ?>entre le <?php echo date('d/m/Y',  strtotime($date1)).' et le '.date('d/m/Y',  strtotime($date2)) ?></h3>
                                </div> <!-- /widget-header -->
                                <div class="widget-content">
 <?php 
 
                                    $groupe = $_GET['drop_1'];
                                   $sql = mysql_query("SELECT * FROM choix_formation,groupe,formation WHERE date_choix BETWEEN '$date1' AND '$date2' AND colonne_choix = '0' AND choix_formation = id_formation AND id_groupe = '$groupe' ORDER BY position_choix DESC LIMIT 3");
                                   $count = mysql_num_rows($sql);
                                   if($count == 0){
                                       Echo 'Aucune Statistiques pour cette période';
                                   }else{
                                   $i = 1;
                                   while($rep = mysql_fetch_array($sql)){
                                 
                                    if($i == 1){
                                        echo '<img src="assets/img/trophy.png" ><span class="countstat">'.$i.'<SUP style="font-size:13px">er</SUP></span></img>';
                                    }elseif($i == 2){
                                         echo '<img src="assets/img/trophy.png" ><span class="countstat">'.$i.'<SUP style="font-size:10px">éme</SUP></span></img>';
                                    }elseif($i== 3){
                                         echo '<img src="assets/img/trophy.png" ><span class="countstat">'.$i.'<SUP style="font-size:10px">éme</SUP></span></img>';
                                    }
                                    
                                  echo  '   '.$rep['titre_formation'].'  || Réf : '.$rep['ref_formation'];
                                     
                                       echo'<br>';
                                       $i++;
                                   }
                                   }
                                   ?>
                                
                                
                                    <div id="graph-stat"></div>
                                </div> <!-- /widget-content -->

                            </div> <!-- /widget -->	

                        </div> <!-- /span6 -->
    
                 
                <?php }else{ ?>
                    
                           <div class="span6">

                            <div class="widget stacked">

                                <div class="widget-header">
                                    <i class="icon-star"></i>
                                    <h3>Statistique de : <?php echo utf8_encode($reponse['nom_users'].' '.$reponse['prenom_users']); ?> entre le <?php echo date('d/m/Y',  strtotime($date1)).' et le '.date('d/m/Y',  strtotime($date2)) ?></h3>
                                </div> <!-- /widget-header -->
                                <div class="widget-content">
                                    <?php
                                    $groupe = $_GET['drop_1'];
                                    $agent = $_GET['agent'];
                                   $sql = mysql_query("SELECT * FROM choix_formation,groupe,formation WHERE date_choix BETWEEN '$date1' AND '$date2' AND colonne_choix = '0' AND choix_formation = id_formation AND id_groupe = '$groupe' AND id_users = '$agent' ORDER BY position_choix DESC LIMIT 3");
                                    $count = mysql_num_rows($sql);
                                   if($count == 0){
                                       Echo 'Aucune Statistiques pour cette période';
                                   }else{
                                   $i = 1;
                                   while($rep = mysql_fetch_array($sql)){
                                      if($i == 1){
                                      echo '<img src="assets/img/trophy.png" ><span class="countstat">'.$i.'<SUP style="font-size:13px">er</SUP></span></img>';
                                    }elseif($i == 2){
                                         echo '<img src="assets/img/trophy.png" ><span class="countstat">'.$i.'<SUP style="font-size:10px">éme</SUP></span></img>';
                                    }elseif($i== 3){
                                         echo '<img src="assets/img/trophy.png" ><span class="countstat">'.$i.'<SUP style="font-size:10px">éme</SUP></span></img>';
                                    }
                                    
                                  echo  '   '.$rep['titre_formation'].'  || Réf : '.$rep['ref_formation'];
                                     
                                       echo'<br>';
                                       $i++;
                                   }
                                   }
                                  ?>
                                
                                    <div id="graph-stat"></div>
                                </div> <!-- /widget-content -->

                            </div> <!-- /widget -->	

                        </div> <!-- /span6 -->
             
<?php
}
            }
            
?>
            
            
            
            
        </div> <!-- /row -->

    </div> <!-- /container -->

</div> <!-- /main -->

<?php
//**************************************
//     fonction pour premier select     //
//**************************************
  function getTierOne()
  {
                $result = mysql_query("SELECT DISTINCT trig_groupe,id_groupe FROM groupe") or die(mysql_error());
                            echo'<option value="all_groups">TOUS</option>';    
        while($tier = mysql_fetch_array( $result ))
   
          {
             echo  '<option value="'.$tier['id_groupe'].' " name="">'.$tier['trig_groupe'].'</option>';
          }
   
  }
   
  //**************************************
//     chained select     //
//**************************************
if(isset($_GET['func']) == "drop_1" && isset($_GET['func'])) { 
   drop_1($_GET['drop_var']); 
}

function drop_1($drop_var)
{  
    include_once('../config/config.php');
                    if($drop_var == 'all_groups'){
                        $result = mysql_query("SELECT * FROM users") 
  or die(mysql_error());
                    }else{
  $result = mysql_query("SELECT * FROM users WHERE categorie='$drop_var'") 
  or die(mysql_error());
                    }
  echo '<select name="agent" id="tier_two">
        <option value=" " disabled="disabled" selected="selected">Choix de l\'agent</option>
        <option value="all_users">TOUS</option>';

       while($drop_2 = mysql_fetch_array( $result )) 
      {
        echo '<option value="'.utf8_encode($drop_2['id_users']).'">'.utf8_encode($drop_2['nom_users']).' '.utf8_encode($drop_2['prenom_users']).'</option>';
      }
  
    echo '</select> ';
    echo'<br>';
     echo'<br>';
    echo'<div class="control-group">
                <label class="control-label">Choix de la date :</label>
                <div class="controls">
                    Entre <input  type="text" name="date1" id="date_debut" "> et le 
                              <input  type="text" name="date2" id="date_fin" ">
                </div>
                </div>';
    echo'<br>';
    echo'<div class="control-group"><div class="controls">';
    echo '<button type="submit" class="btn btn-warning" name="submit" value="choix_submit">Valider</button>';
    echo '</div>';
    echo '</div>';
    
}

        ?>

<script>
$("#date_debut").datepicker({dateFormat: "yy-mm-dd"});
$("#date_fin").datepicker({dateFormat: "yy-mm-dd"});
	$('#wait_1').hide();
	$('#drop_1').change(function(){
	  $('#wait_1').show();
	  $('#result_1').hide();
      $.get("<?php echo site_url('statistiques/test'); ?>", {
		func: "drop_1",
		drop_var: $('#drop_1').val()
      }, function(response){
        $('#result_1').fadeOut();
        setTimeout("finishAjax('result_1', '"+ escape(response)+"')", 400);
      });
    	return false;
	});


function finishAjax(id, response) {
  $('#wait_1').hide();
  $('#'+id).html(unescape(response));
  $('#'+id).fadeIn();
}

</script>

