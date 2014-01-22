 <div class="main">
                <div class="container">
                    <div class="row">
                       <div class="span6">
                            <div class="widget stacked">
                                <div class="widget-header">
                                    <i class="icon-star"></i>
                                    <h3>Ajouter une formation</h3>
                                </div> <!-- /widget-header -->
                                <div class="widget-content">
                                <?php $attributes = array('id' => 'formation'); ?>
                                <?php echo form_open_multipart('formation/ajouter', $attributes); ?>
                                       <div class="control-group">
                                            <label class="control-label">Titre de la formation :</label>
                                            <div class="controls">
                                                <input type="text" name="titre_formation" id="titre_formation" placeholder="Titre..." value="<?php echo set_value('titre_formation'); ?>"/>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Mot(s) clef de la formation :</label>
                                            <div class="controls">
                                                <input type="text" name="mcformation" id="mcformation" placeholder="Mot clef..." value="<?php echo set_value('mcformation'); ?>">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Référence de la formation :</label>
                                            <div class="controls">
                                                <input type="text" name="refformation" id="refformation" placeholder="Référence..." value="<?php echo set_value('refformation'); ?>">
                                                <div class="btn" style="margin-bottom:10px;" id="generermdp">Générer</div><i id="helpgenerate" class="icon-question-sign" style=" margin-left: 2px;margin-top: -14px;"></i>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Niveau de formation :</label>
                                            <div class="controls">
                                                <select name="niveau_formation" id="niveau_formation">
                                                             <?php foreach ($fonction as $row): ?>
                                                             	 <option value="<?php echo $row->categorie_groupe; ?>"><?php echo $row->categorie_groupe; ?></option>
                                                             <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Contenu de la formation :</label>
                                            <div class="controls">
                                                <textarea name="contenu_formation" id="contenu_formation" placeholder="Contenu..." style="min-height: 200px;min-width: 400px;" value="<?php echo set_value('contenu_formation'); ?>"></textarea>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Activer la formation :</label>
                                            <div class="controls">
                                                <div class="slideThree">
                                                    <input type="checkbox"  id="slideThree"  value="1" name="check" />
                                                    <label for="slideThree"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="control-group" id="cloture" style="display:none;">
                                            <label class="control-label">Date de clôture de la formation :</label>
                                            <div class="controls">
                                                <input type="text" id="datecloture" name="date_formation" value="<?php echo set_value('date_formation'); ?>"/>
                                            </div>
                                        </div>
                                        <div class="fileupload fileupload-new" data-provides="fileuploadformation">
                                <div class="input-append">
                                <div class="uneditable-input span3"><i class="icon-file fileupload-exists"></i> <span class="fileupload-preview"></span></div><span class="btn btn-file"><span class="fileupload-new">Fichier joint</span><span class="fileupload-exists">Changer</span><input type="file" name="mydoc" /></span><a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Effacer</a>
                                </div>
                                </div>
                                <button class="btn" value="ajouter">Annuler</button>
                                <button type="submit" class="btn btn-warning" value="Envoyer" name="confirm_ajouter">Confirmer</button>
                                    <?php echo form_close(); ?>
                                                                      
                                </div> <!-- /widget-content -->

                            </div> <!-- /widget -->


                        </div> <!-- /span6 -->




                    </div> <!-- /row -->

                </div> <!-- /container -->

            </div>

             