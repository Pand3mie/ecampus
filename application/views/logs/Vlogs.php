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
                        <form action="" method="POST">
                        <div class="control-group">
                                           
                                            <div class="controls">
                                                <span style="margin-left:10px;margin-top:20px;">Suppression de  :</span>
                        <select id="supp_logs" name="supp_logs" class="input-small" style="margin-top:10px;">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="30">30</option>
                            <option value="all">Toutes</option>
                        </select><span> lignes</span>
                        
                        <button id="valider" type="submit" class="btn btn-warning" style="margin-left:30px;" name="valider">Suppression</button>
                                            </div>
                        </div>
                        </form>
                                     
        </div> <!-- /widget-content -->

                </div> <!-- /widget -->	

            </div> <!-- /span6 -->

        </div> <!-- /row -->                 
                        
    </div> <!-- /container -->

</div> <!-- /main -->

