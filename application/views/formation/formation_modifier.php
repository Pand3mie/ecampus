
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
                                                                                <?php
                                                                                $req = mysql_query("SELECT * FROM formation");
                                                                                while ($mf = mysql_fetch_array($req)) {
                                                                                    ?>
                                                                                
                                                                                    <option value="<?php echo $mf['id_formation']; ?>"><?php echo $mf['titre_formation'].'    ||  Réf : '.$mf['ref_formation']; ?></option>
                                                                                    <?php
                                                                                }
                                                                                ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div> <!-- /widget-content -->
                                                            </div> <!-- /widget -->
                                                       
                                                </div><!-- /span6 -->
                                                <div class="span6">

                           

                                    <div id="modformation">
                                    
                                    </div>
                                             
                                            </div><!-- Fin de row -->
                                            </div><!-- Fin de container -->
                                            </div><!-- Fin de main -->
