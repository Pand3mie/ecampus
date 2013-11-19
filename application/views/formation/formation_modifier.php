
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
                                                                            <select id="modif_formation" class="input-xxlarge" >
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

                           

                                    <div id="modformation"></div>
                                <?php
                                    if (isset($_POST['confirm_modif'])) {
                                        
                                        $idf = $_POST['id_formation'];
                                        $ref = $_POST['refformation'];
                                        $titre = $_POST['titre_formation'];
                                        $motclef = $_POST['mcformation'];
                                        $niveau = $_POST['niveau_formation'];
                                        $texte = stripslashes(nl2br($_POST['contenu_formation']));
                                        $date = $_POST['date_formation'];
                                        $mod = mysql_query("UPDATE formation SET  ref_formation = '$ref' ,titre_formation = '$titre', motclef_formation = '$motclef', contenu_formation = '$texte',date_formation = '$date', niveau_formation= '$niveau'
                                                                              WHERE id_formation = '$idf' ");
                                        }
                                    ?>                  
                                            </div><!-- Fin de row -->
                                            </div><!-- Fin de container -->
                                            </div><!-- Fin de main -->