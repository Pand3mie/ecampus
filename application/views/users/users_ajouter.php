 <div class="main">

    <div class="container">

        <div class="row">

            <div class="span6">

                <div class="widget stacked">

                    <div class="widget-header">
                        <i class="icon-star"></i>
                        <h3>Ajouter un Utilisateur</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">

                        <!--Formulaire d'ajout utilisateur-->      

                        

                        <?php echo form_open_multipart('users/ajouter');?>

                            <div class="control-group">
                                <label class="control-label">NNI :</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge" id="user_nni" name="nni" value="<?php echo set_value('nni'); ?>">
                                </div>
                            </div>  



                            <div class="control-group">
                                <label class="control-label">Nom :</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge" id="user_name" name="nom" value="<?php echo set_value('nom'); ?>">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Pr&eacute;nom :</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge" id="user_prenom" name="prenom" value="<?php echo set_value('prenom'); ?>">
                                </div>
                            </div>



                            <div class="control-group">
                                <label class="control-label">Email :</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge" id="user_email" name="mail" value="<?php echo set_value('mail'); ?>">
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">T&eacute;l&eacute;phone :</label>
                                <div class="controls">
                                    <input type="text" class="input-xlarge" id="user_tel" name="tel" data-mask="99.99.99.99.99" value="<?php echo set_value('tel'); ?>">
                                </div>
                            </div>            

                            <div class="control-group">
                                <label class="control-label">Groupe :</label>
                                <div class="controls">
                                    <select name="user_select">
                                        <option selected>Selectionnez...</option>
                                        <?php foreach ($groupe as $select): ?>
                                             <option value="<?php echo $select['id_groupe']; ?>"><?php echo $select['trig_groupe']; ?></option>
                                        <?php endforeach ?>
                                   </select>
                                </div>
                            </div>


                            <div class="control-group">
                                <label class="control-label"></label>
                                <div class="controls">
                                 <a data-toggle="modal" href="#myModal" class="btn btn-warning">Ajouter</a>  
                                </div>
                            </div>
                     

                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->	


            </div> <!-- /span6 -->

            <div class="span6">

                <div class="widget stacked">

                    <div class="widget-header">
                        <i class="icon-star"></i>
                        <h3>Ajouter une photo</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                            <div>
                                <span class="btn btn-file"><span class="fileupload-new">Selectionnez une image</span><span class="fileupload-exists">Changer</span><input type="file" name="myimage"/></span>
                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Retirer</a>
                            </div>
                        </div> 
                    </div><!-- /widget-content -->

                </div>

                </div><!-- /span6 -->
  <!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Confirmation</h3>
    </div>
<div class="modal-body">
    <p>Confirmer l'utilisateur ?</p>
</div>
<div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
    <button type="submit" class="btn btn-warning" name="saveUsers">Ajouter</button>
</div>
</div>
            <?php echo form_close(); ?>         
        </div> <!-- /row -->

    </div> <!-- /container -->

</div> <!-- /main -->