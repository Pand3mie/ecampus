<div class="main">

    <div class="container">

        <div class="row">

            <div class="span12">

                <div class="widget stacked">

                    <div class="widget-header">
                        <i class="icon-star"></i>
                        <h3>Listing des inscriptions</h3>
                        <div class="pull-right"><a href="javascript:window.print()"><?php echo img('print'); ?></a></div>
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
                      <?php foreach ($triData as $liste): ?>
            <tr>
                            <td><?php echo $liste['nom_users'].' '.$liste['prenom_users']; ?></td>
                            <td><?php echo $liste['nni']; ?></td>
                            <td><?php echo $liste['categorie_groupe']; ?></td>
                            <td><?php echo $liste['titre_formation'].' || '.$liste['ref_formation']; ?></td>
                            <td><?php echo date('d/m/Y',  strtotime($liste['date_formation'])) ?></td>
                            <td></td>
                                </tr>

                        <?php endforeach ?>
                            </tbody>
                           
                     </table>
                 
                                            
                   </div> <!-- /widget-content -->
              
                </div> <!-- /widget -->	


            </div> <!-- /span12 -->
                </div>
                    </div>
                        </div>