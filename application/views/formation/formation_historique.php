<div class="main">
                <div class="container">
                    <div class="row">
                        <div class="span6">
                            <div class="widget widget-nopad stacked">
                                <div class="widget-header">
                                    <i class="icon-list-alt"></i>
                                    <h3>Formations Suivies</h3>
                                </div> <!-- /widget-header -->
                                <div class="widget-content">
                                    <ul class="news-items">
                                        <?php
                                        $users = 2;
                                        $_SESSION['id'] = 2;
                                        $sql = mysql_query("
                SELECT DISTINCT suivi_formation.id_users,suivi_formation.id_formation,suivi_formation.vote_dispo,formation.id_formation,formation.ref_formation,formation.titre_formation,formation.date_formation,formation.contenu_formation,formation.titre_formation
                FROM suivi_formation, formation
                WHERE suivi_formation.id_formation = formation.id_formation
                AND suivi_formation.id_users = '$users'
                   ");
                                        while ($row = mysql_fetch_array($sql)) {
                                            ?>
                                            <li>
                                                <div class="news-item-detail">
                                                    <a href="javascript:;" class="news-item-title"  id="affichageformation" data-id="<?php echo $row['id_formation']; ?>" data-users="<?php echo $row['id_users'] ?>">R&eacute;f : <?php echo $row['ref_formation'] . ' ' . $row['titre_formation']; ?></a>&nbsp;
                                                    <?php 
                                                    $date = date('y-m-d');
                                                    if($row['date_formation'] > $date){
                                                        echo '<span style="font-size:9px" >formation en cours...</span>';
                                                    }else{
                                                    ?>
                                                    <i class="iconic-o-check" style="color: #51A351"></i>
                                                    <?php  } ?>
                                                    <p class="news-item-preview"><?php echo substr($row['contenu_formation'], 0, 110) . '...'; ?></p>
                                                    <?php if ($row['vote_dispo'] != 0) { ?>
                                                        <br>
                                                        <p class="muted pull-left" style="font-size:10px;font-style:italic;">Votre commentaire ou votre vote à déja été pris en compte<p>
                                                            <?php
                                                        } else {
                                                            ?>
                                                            <br>
                                                        <p><a  data-id="<?php echo $_SESSION['id']; ?>"  data-ref="<?php echo $row['titre_formation']; ?>" data-formation="<?php echo $row['id_formation']; ?>" class="muted pull-right" id="comment" style="font-size:10px;font-style:italic;">Votez ou laissez un commentaire...</a></p>
                                                    <?php } ?>
                                                </div>
                                                <div class="news-item-date">
                                                    <span class="news-item-day"><?php echo date('d', strtotime($row['date_formation'])) ?></span>
                                                    <span class="news-item-month">
                                                        <?php
                                                        $mois = substr($row['date_formation'], 6, 1) - 1;
                                                        $t_mois = array('Jan', 'F&eacute;v', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Ao&ucirc;t', 'Sept', 'Oct', 'Nov', 'D&eacute;c');
                                                        setlocale(LC_TIME, 'french');
                                                        echo $t_mois[$mois];
                                                        ?></span>
                                                </div>

                                            </li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                     <?php 
                  if(isset($_POST['voteformation'])) {
                      $score = $_POST['score'];
                        $users = $_POST['users'];
                        $id = $_POST['id'];
                        $date = date('Y-m-d');
                        $commentaire = $_POST['commentaireF'];
                        $invote = mysql_query("INSERT INTO vote (id_vote,vote,commentaires,id_users,id_formations,date_vote) VALUES ('','$score','$commentaire','$id','$users','$date')");
                        $update = mysql_query("UPDATE suivi_formation SET  vote_dispo = '1' WHERE id_users = '$id' AND id_formation = '$users' ");
                        
                         }
                         
                ?>
                                </div> <!-- /widget-content -->
                            </div> <!-- /widget -->
                        </div> <!-- /span6 -->
                        <div class="span6">
                           <div id="resultformation"></div>
                              </div> <!-- /span6 -->
                    </div> <!-- /row -->
                </div> <!-- /container -->
            </div> <!-- /main -->