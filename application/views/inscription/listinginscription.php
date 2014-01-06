<div class="main">

    <div class="container">

        <div class="row">

            <div class="span12">

                <div class="widget stacked">

                    <div class="widget-header">
                        <i class="icon-star"></i>
                        <h3>Listing des inscriptions</h3>
                        <div class="pull-right"><a href="javascript:window.print()"><img src="assets/img/print.png" alt="Imprimer" title="Imprimer"/></a></div>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                        <form action="" method="POST">
                                   <div class="control-group">
                                                                        <label class="control-label">Trier :</label>
                                                                        <div class="controls">
                                                                            <select id="tri_formation" class="input-xlarge" name="tri_formation">
                                                                                <option>Selectionnez...</option>
                                                                                <option value="categorie_groupe">Statut</option>
                                                                                <option value="titre_formation">Formation</option>
                                                                                <option value="date_formation">date clôture</option>
                                                                        </select>
                                                                            <button style="line-height:1.7em;vertical-align: 3px;">Trier</button>
                                                                        </div>
                                                                    </div>
                        </form>
                        <?php if(isset($_POST['tri_formation'])){?>
                                
                            <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Agents</th>
                                    <th>NNI</th>
                                    <th>Statut</th>
                                    <th>Formation</th>
                                    <th>Date clôture</th>
                                    <th>Emargement</th>
                                </tr>
                            </thead>    
                            <tbody>
                            <?php
                            $tri = $_POST['tri_formation'];
                            
                            $date = date('y-m-d');
                            $listing = mysql_query("SELECT A.id_users,A.id_formation, B.id_users, B.nom_users,B.prenom_users,B.nni,c.titre_formation,c.date_formation, d.categorie_groupe,c.ref_formation 
                                FROM suivi_formation AS A,users AS B, formation AS C, groupe AS D 
                                WHERE A.id_users = B.id_users 
                                AND c.id_formation = A.id_formation
                                AND d.id_groupe = b.categorie
                                AND date_formation > '$date' ORDER BY '$tri'");
                            while($liste = mysql_fetch_array($listing)){
                                  ?>
                                <tr>
                            <td><?php echo $liste['nom_users'].' '.$liste['prenom_users']; ?></td>
                            <td><?php echo $liste['nni']; ?></td>
                            <td><?php echo $liste['categorie_groupe']; ?></td>
                            <td><?php echo $liste['titre_formation'].' || '.$liste['ref_formation']; ?></td>
                            <td><?php echo date('d/m/Y',  strtotime($liste['date_formation'])) ?></td>
                            <td></td>
                                </tr>
                        <?php } ?>
                            </tbody>
                           
                     </table>
                 
                   <?php   }else{?>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Agents</th>
                                    <th>NNI</th>
                                    <th>Statut</th>
                                    <th>Formation</th>
                                    <th>Date clôture</th>
                                    <th>Emargement</th>
                                </tr>
                            </thead>    
                            <tbody>
                            <?php 
                            $date = date('y-m-d');
                            $listing = mysql_query("SELECT A.id_users,A.id_formation, B.id_users, B.nom_users,B.prenom_users,B.nni,c.titre_formation,c.date_formation, d.categorie_groupe,c.ref_formation 
                                FROM suivi_formation AS A,users AS B, formation AS C, groupe AS D 
                                WHERE A.id_users = B.id_users 
                                AND c.id_formation = A.id_formation
                                AND d.id_groupe = b.categorie
                                AND date_formation > '$date' ORDER BY nom_users AND date_formation");
                            while($liste = mysql_fetch_array($listing)){
                                  ?>
                                <tr>
                            <td><?php echo $liste['nom_users'].' '.$liste['prenom_users']; ?></td>
                            <td><?php echo $liste['nni']; ?></td>
                            <td><?php echo $liste['categorie_groupe']; ?></td>
                            <td><?php echo $liste['titre_formation'].' || '.$liste['ref_formation']; ?></td>
                            <td><?php echo date('d/m/Y',  strtotime($liste['date_formation'])) ?></td>
                            <td></td>
                                </tr>
                        <?php } ?>
                            </tbody>
                               </table>
                       <?php } ?>
                        
                   </div> <!-- /widget-content -->
              
                </div> <!-- /widget -->	


            </div> <!-- /span12 -->
                </div>
                    </div>
                        </div>