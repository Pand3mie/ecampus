 <div class="main">

    <div class="container">

        <div class="row">

            <div class="span6">

                <div class="widget stacked">

                    <div class="widget-header">
                        <i class="icon-star"></i>
                        <h3>Modifier une News</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                        
   <!--Formulaire d'ajout de news-->      
   <div class="control-group">
<label class="control-label">Choix de la news :</label>
<div class="controls">
    <?php 
       $sqli = mysql_query("SELECT COUNT(*) AS nb FROM news");
       $nbs = mysql_fetch_array($sqli);
   $nb = $nbs['nb'];
   if ($nbs == 0){
       echo '<br><div class="alert alert-error">Pas de news à modifier</div>';
   }else{
    
    ?>
<select type="text" class="input-xlarge" id="choixnews" name="choixnews">
    <option>Selectionnez...</option>
    <?php  $sql = mysql_query("SELECT * FROM news");
    while ($row = mysql_fetch_array($sql)) {
    ?>
    <option id="optionvalue" value="<?php echo $row['id_news'] ?>"><?php echo $row['titre_news'].'  /  '.$row['date_news']; ?></option>
    <?php } ?>
</select>
    <?php } ?>
</div>
</div>
   <div><a href="<?php echo site_url('accueil'); ?>">Accueil</a></div>
   <br>
   <div id="results"></div>
                    </div> <!-- /widget-content -->
              
                </div> <!-- /widget -->	


            </div> <!-- /span6 -->
                </div>
                    </div>
                        </div>
