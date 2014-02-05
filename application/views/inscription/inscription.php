<div class="container-fluid" style="max-width:920px;margin:0 auto;">
                <div class="row-fluid">
                    <div class="span12">
                         <div class="widget stacked">

                                <div class="widget-header">
                                    <i class="icon-star"></i>
                                    <h3>Inscriptions</h3>
                                </div> <!-- /widget-header -->
                                <?php  
                  $attributes = array('id' => 'formusers');
                echo form_open('inscription', $attributes);
                        ?>
              <div class="widget-content">
                                
                        <select multiple="multiple" size="10" name="choix_agent[]" class='choix_agent span12'>
                            <?php foreach ($inscrit as $row): ?>
                              <option value="<?php echo $row['id_users']; ?>"><?php echo $row['prenom_users'].' '.$row['nom_users'].' ||   Groupe '.$row['trig_groupe']; ?></option>
                            <?php endforeach ?>
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
                           <?php foreach ($formation as $rows): ?>
                              <option value="<?php echo $rows['id_formation']; ?>"><?php echo 'R&eacute;f :'.$rows['ref_formation'].' - '.$rows['titre_formation']; ?></option> 
                           <?php endforeach ?>
                        </select>
        <button class="btn" value="annuler">Annuler</button>
        <a data-toggle="modal" href="#myModal" class="btn btn-warning">Valider</a>
                     <!-- Modal -->
        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Confirmation</h3>
        </div>
        <div class="modal-body">
        <p>Confirmer l'inscription ?</p>
        </div>
        <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
        <button type="submit" class="btn btn-warning"  name="inscription" value="valide" id="inscription">Confirmer</button>
        </div>
        </div>    
                    </div>
                </div>
              </div>
          </div>
          <?php echo form_close(); ?>
</div>

