
        <div class="main"><!-- Debut main -->

            <div class="container"><!-- Debut container -->

                <div class="row"><!-- Debut row -->

                    <div class="span6"><!-- Debut span6 -->

                        <div class="widget stacked">

                            <div class="widget-header">
                                <i class="icon-pencil"></i>
                                <h3>Modification</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                <div class="control-group">
                                    <label class="control-label">Choix de la formation :</label>
                                    <div class="controls">
                                        <select id="modif_formation" class="input-xlarge" >
                                            <option>Selectionnez...</option>
                                            <?php foreach ($allformation as $formation): { ?>
                                                 <option value="<?php echo $formation->id_formation; ?>"><?php echo $formation->titre_formation.'    ||  Réf : '.$formation->ref_formation; ?></option>
                                           <?php  } endforeach; ?>
                                        
                                        </select>
                                    </div>
                                </div>
                            </div> <!-- /widget-content -->
                        </div> <!-- /widget -->
                   
            </div><!-- /span6 -->
            <div class="span6">

                <div id="modformation"></div>
         
                </div><!-- Fin de row -->
            </div><!-- Fin de container -->
         </div><!-- Fin de main -->
        </div>
