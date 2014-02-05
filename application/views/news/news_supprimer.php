
<div class="main">

    <div class="container">

        <div class="row">

            <div class="span6">

                <div class="widget stacked">

                    <div class="widget-header">
                        <i class="icon-star"></i>
                        <h3>Supprimer une News</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                        
  
   <?php if ($news): ?>
          
             
   <div class="control-group">
<label class="control-label">Choix de la news :</label>
<div class="controls">
    <select type="text" class="input-xlarge" id="deletenews" name="deletenews">
    <option>Selectionnez...</option>
   <?php foreach ($news as $key => $row) {?>
    <option id="optionvalue" value="<?php echo $row['id_news'] ?>"><?php echo $row['titre_news'].'  /  '.$row['date_news']; ?></option>
    <?php } ?>
</select>
    
</div>
</div>
   <div><a href="<?php echo site_url('accueil'); ?>">Accueil</a></div>
   <br>
   <div id="results"></div>
                    </div> <!-- /widget-content -->
                  <?php else: ?>
 <div class="alert alert-error"><?php echo "Pas de news à supprimer"; ?></div>

                    <?php endif ?>
                  
                </div> <!-- /widget -->	
            </div> <!-- /span6 -->
                </div>
                    </div>
                        </div>
<script>                        
  // Search Ajax jquery Pour affichage news dans la partie suppr
  
    $("#deletenews").change(function(){
      var selectValues = getSelectValue('deletenews');
      var uri = "<?php echo base_url(); ?>";
          $.ajax({
           type: "POST",
           url:  uri + "index.php/news/ajaxsupprimer/" + selectValues + "",
           data : 'id='+selectValues, // + form.weapons.serialize ,
            success: function(data){
          $('#results').html(data);         
           }
           
        });
  });
    </script>