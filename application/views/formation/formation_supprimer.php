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
                                                                            <select id="suppr_formation" class="" >
                                                                                <option>Selectionnez...</option>
                                                                              <?php foreach ($formation as $key => $row): ?>
                                                                                 <option value="<?php echo $row['id_formation']; ?>"><?php echo $row['titre_formation'].'    ||  Réf : '.$row['ref_formation']; ?></option>
                                                                             <?php endforeach ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- /widget-content -->
                                                            </div> <!-- /widget -->
                                                       
                                                </div><!-- /span6 -->
                                                <div class="span6">

                           

                                    <div id="supprformation"></div>
                                    
                                            </div><!-- Fin de row -->
                                            </div><!-- Fin de container -->
                                            </div><!-- Fin de main -->