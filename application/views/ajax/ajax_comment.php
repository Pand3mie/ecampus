        <div class="widget stacked">
     
                <div class="widget-header">
                    <i class="icon-inbox"></i>
                    <h3>Commentaire(s) pour : <?php echo $titre; ?></h3>
                </div> <!-- /widget-header -->

                <div class="widget-content">
                    
                    <form id="commentaire_formation" action="" method="POST">
                        <input type="hidden" value="<?php echo $users; ?>" name="users" />
                        <input type="hidden" value="<?php echo $id; ?>" name="id" />
                        <div class="control-group">
                                            <label class="control-label">Votez :</label>
                                            <div class="controls">
                        <div id="starvote" data-vote=""></div>
                         </div>
                                        </div>
                        <br>
       <div class="control-group">
       <div class="btn-toolbar" data-role="editor-toolbar" data-target="#commentaireF">
       </div>
            <label class="control-label">Commentaires :</label>
            <div class="controls">
                <textarea name="commentaireF" id="commentaireF" placeholder="Contenu..." style="min-height: 200px;min-width: 500px;"></textarea>
            </div>
        </div>
        
        <button class="btn" value="annuler">Annuler</button>
        
        <a data-toggle="modal" href="#myModal" class="btn btn-warning">Confirmer</a>
      

                     <!-- Modal -->
            <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Confirmation</h3>
            </div>
            <div class="modal-body">
            <p>Confirmer le Vote ?</p>
            </div>
            <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
            <button type="submit" class="btn btn-warning" value="update" name="voteformation" id="voteformation">Confirmer</button>
            </div>
            </div>
    </form>
  </div>
</div>
    <script>
$('#starvote').raty({path   : '<?php echo base_url() ?>'});
$('#commentaireF').wysiwyg();
    </script>