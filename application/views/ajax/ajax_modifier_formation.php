<?php

foreach ($id as $op) {?>

<div class="widget stacked">

                                <div class="widget-header">
                                    <i class="icon-list-alt"></i>
                                    <h3>Formation</h3>
                                </div> <!-- /widget-header -->
                                <div class="widget-content">
                                    <form id="formations" action="" method="POST">
                                        
                                         <input type="hidden" name="id_formation" value="<?php echo $op['id_formation']; ?>" id="id_formation"/>
                                        <div class="control-group">
                                            <label class="control-label">Titre de la formation :</label>
                                            <div class="controls">
                                                <input type="text" name="titre_formation" id="titre_formation" value="<?php echo $op['titre_formation'];  ?>"/>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label">Mot(s) clef de la formation :</label>
                                            <div class="controls">
                                                <input type="text" name="mcformation" id="mcformation" value="<?php echo $op['motclef_formation'];  ?>">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label">Référence de la formation :</label>
                                            <div class="controls">
                                                <input type="text" name="refformation" id="refformation" placeholder="Référence..." value="<?php echo $op['ref_formation'];  ?>">
                                    </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label">Niveau de formation :</label>
                                            <div class="controls">
                                                <select name="niveau_formation" id="niveau_formation">
                                                     <option selected="selected" value="<?php echo $op['niveau_formation'];  ?>"><?php echo $op['niveau_formation'];  ?></option>
                                                    <option value="TCRE">TCRE</option>
                                                    <option value="CCDS">CCDS</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label">Contenu de la formation :</label>
                                            <div class="controls">
                                                <textarea name="contenu_formation" id="contenu_formation" style="min-height: 200px;min-width: 95%;"><?php echo utf8_encode($op['contenu_formation']);  ?></textarea>
                                            </div>
                                        </div>

                                       <div class="control-group" id="cloture">
                                            <label class="control-label">Date de clôture de la formation :</label>
                                            <div class="controls">
                                                <input type="text" id="datecloture_modif" name="date_formation" value="<?php echo $op['date_formation']; ?>"/>
                                            </div>

                                        </div>
                                        <button class="btn" value="annuler">Annuler</button>
                                        <a data-toggle="modal" href="#myModal" class="btn btn-warning">Modifier</a>
                                      

                                                     <!-- Modal -->
                                            <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h3 id="myModalLabel">Confirmation</h3>
                                            </div>
                                            <div class="modal-body">
                                            <p>Confirmer la modification ?</p>
                                            </div>
                                            <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
                                            <button type="submit" class="btn btn-warning" value="ajouter" name="confirm_modif">Confirmer</button>
                                            </div>
                                            </div>
                                        </form>
                                     <?php
}
?>
                                                    
                                    
                                    </div> <!-- /widget-content -->

                            </div> <!-- /widget -->

                        </div> <!-- /span6 -->

                        <script>
                $('#datecloture_modif').datepicker($.datepicker.regional[ "fr" ]);        
                      
                </script>
