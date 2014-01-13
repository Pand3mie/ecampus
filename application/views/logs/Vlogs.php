<div class="main">

    <div class="container">

        <div class="row">

            <div class="span8">	

                <div class="widget widget-nopad stacked">

                    <div class="widget-header">
                        <i class="icon-globe"></i>
                        <h3>Logs</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">

                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>IP Machine</th>
                                    <th>Date de connexion</th>
                                    <th>Date de deconnexion</th>
                                    <th>Agents</th>
                                    <th>NNI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                 foreach ($log as $logs) { ?>
                                    
                                 <tr>
                                    <td><img src="<?php echo img_url('ip'); ?>" /></td>
                                    <td><?php echo $logs['ip_logs']; ?></td>
                                    <td><?php echo $logs['time_connect']; ?></td>
                                    <td><?php 
                                    if($logs['time_deconnect'] == '0000-00-00 00:00:00' ){
                                        echo 'Fermeture Navigateur ';
                                        }else{
                                    echo $logs['time_deconnect']; }?>
                                    </td>
                                    <td><?php echo $logs['nom_users']; ?></td>
                                    <td><?php echo $logs['nni']; ?></td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                        
                        
                        
                   
                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->	

            </div> <!-- /span6 -->

       

            <div class="span4">	

                <div class="widget widget-nopad stacked">

                    <div class="widget-header">
                        <i class="icon-globe"></i>
                        <h3>Logs</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                        <?php echo form_open('logs'); ?>
                        <div class="control-group">
                             
                            <div class="controls">
                                <span style="margin-left:10px;margin-top:20px;">Suppression de  :</span>
                                    <select id="supp_logs" name="supp_logs" class="input-small" style="margin-top:10px;">
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                        <option value="all">Toutes</option>
                                    </select>
                                <span> lignes</span>
                                 <a data-toggle="modal" href="#myModal" class="btn btn-warning">Supprimer</a>       
                            </div>

                        </div>
                        
                                                             <!-- Modal -->
                        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                             <div class="modal-header">
                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h3 id="myModalLabel">Confirmation</h3>
                            </div>

                        <div class="modal-body">
                            <p>Confirmer la suppression des lignes ?</p>
                        </div>

                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
                            <button id="valider" type="submit" class="btn btn-warning" style="margin-left:30px;" name="valider" value="run">Suppression</button>
                         </div>
                         
                        </div>

                <?php echo form_close() ?>                               
        </div> <!-- /widget-content -->

                </div> <!-- /widget -->	

            </div> <!-- /span6 -->

        </div> <!-- /row -->                 
                        
    </div> <!-- /container -->

</div> <!-- /main -->

