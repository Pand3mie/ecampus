 <?php 
 $dateC = date('Y-m-d');
            $utilisateur = 2;
            $controls = mysql_query("SELECT COUNT(id_choix) FROM choix_formation WHERE date_choix='$dateC' AND id_users = '$utilisateur'");
            $count = mysql_fetch_row($controls);
?>
       <?php     if($count[0] > 1){?>
                <div class="main">
                <div class="container">
                    <div class="span10">
                        <div class="row">
                            <div class="widget stacked">
                                <div class="widget-header">
                                    <i class="icon-star"></i>
                                    <h3>Choix de votre liste de formations</h3><div id="choix"></div>
                                </div> <!-- /widget-header -->
                                <div class="widget-content">
                                    <p>Votre choix pour la journée du <span style="font-weight:bold;"><?php echo date('d/m/Y') ?></span> à déja été pris en compte</p>
                                     </div> <!-- /widget-content -->
                            </div> <!-- /widget -->
                        </div> <!-- /span9 -->
                    </div> <!-- /row -->
                 </div> <!-- /container -->
            </div> <!-- /main -->
            
            <?php
            }else{
            ?>

            <div class="main">
                <div class="container">
                    <div class="span10">
                        <div class="row">
                            <div class="widget stacked">
                                <div class="widget-header">
                                    <i class="icon-star"></i>
                                    <h3>Choix de votre liste de formations</h3><div id="choix"></div>
                                </div> <!-- /widget-header -->
                                <div class="widget-content">
                                   <div class="row">
                                        <div class="span5">
                                            <div class="header_drop">Glissez ici votre selection</div>
                                            <ul id="choixformation" class="connectedSortable">
                                              
                                            </ul>
                                        </div> <!-- /span5 -->
                                        <div class="span4">
                                            <div class="header_drop">Formation disponible</div>
                                            <ul id="disponibleformation" class="connectedSortable">
                                                <?php
                                                $date = date('Y-m-d');
                                                $sql = mysql_query("SELECT * FROM formation where statut_formation = 'disponible' AND date_formation > '$date' ");
                                                while ($row = mysql_fetch_array($sql)) {
                                                    $dato = date('d/m/Y',  strtotime($row['date_formation']));
                                                    ?>
                                                <li class="drop_formation" id="entry_<?php echo $row['id_formation']; ?>"><img src="assets/img/book.png" /><?php echo 'Réf : ' . $row['ref_formation'] . '  |  ' . $row['titre_formation']; ?><span id="dato"><?php echo 'Date de cloture : '.$dato; ?></span></li>
                                                <?php } ?>
                                            </ul>
                                        </div><!-- /span4 -->
                                    </div> <!-- //row -->
                                </div> <!-- /widget-content -->
                            </div> <!-- /widget -->
                        </div> <!-- /span9 -->
                    </div> <!-- /row -->
                 </div> <!-- /container -->
            </div> <!-- /main -->
                            <?php }?>
            <?php