<!DOCTYPE html>
<html>
    <head>
        <title>CampuS 1.0</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <!-- Insert Css ################################################# -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="<?php echo css_url('bootstrap'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo css_url('base'); ?>" >
        <link rel="stylesheet" type="text/css" href="<?php echo css_url('colorpicker'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo css_url('base_responsive'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo css_url('dashboard'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo css_url('duallist'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo css_url('style'); ?>">
    <!--    <link rel="stylesheet" type="text/css" href="assets/css/jqueryui/jquery-ui-1.10.2.custom.css">
         <link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">-->
        <link rel="stylesheet" type="text/css" href="<?php echo css_url('bootstrap-responsive'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo css_url('bootstrap-wysihtml5'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo css_url('datepicker'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo css_url('jquery-ui'); ?>">
        <!-- Fin d'insert Css ################################################ -->
    </head>

  
          <div id="fixe">
<div class="navbar navbar-inverse navbar-fixed-top">

    <div class="navbar-inner">

        <div class="container">

            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <i class="icon-cog"></i>
            </a>

            <a class="brand" href="<?php echo base_url(); ?>">
                CampuS <sup>1.0</sup>
            </a>        

            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                             <i><img src="<?php echo img_url('settings'); ?>"/></i>
                            Configurations
                            <b class="caret"></b>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="#bureau" role="button" data-toggle="modal">Configuration du bureau</a></li>
                              
                            <li><a href="">Configuration des news</a></li>
                            <li><a href="#formation" role="button" data-toggle="modal">Configuration des formations</a></li>
                          
                            <li class="divider"></li>
                            <li><a href="">Aide</a></li>
                        </ul>

                    </li>

                    <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <i><img src="<?php echo img_url('users'); ?>"/></i>
                   
                            <b class="caret"></b>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="profils.php">Mon Profil</a></li>
                            <li><a href="groupe.php">Mon Groupe</a></li>
                            <li class="divider"></li>
                            <li><a href="includes/deconnexion.php">D&eacute;connexion</a></li>
                        </ul>

                    </li>
                </ul>

               <form class="navbar-search pull-right">
                    <input type="text" class="search-query" placeholder="Recherche">
                </form>-->

            </div><!--/.nav-collapse -->    

        </div> <!-- /container -->

    </div> <!-- /navbar-inner -->

</div> <!-- /navbar -->

<div class="subnavbar">

    <div class="subnavbar-inner">

        <div class="container">

            <a class="btn-subnavbar collapsed" data-toggle="collapse" data-target=".subnav-collapse">
                <i class="icon-reorder"></i>
            </a>

            <div class="subnav-collapse collapse">
                <ul class="mainnav">

                    <li class="active">
                        <a href="<?php echo base_url(); ?>">
                             <i><img src="<?php echo img_url('home'); ?>"/></i>
                              <span>Accueil</span>
                        </a>        
                                                                          
                    </li>

                    <li class="dropdown">                   
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                             <i><img src="<?php echo img_url('office'); ?>"/></i>
                            <span>Formations</span>
                            <b class="caret"></b>
                        </a>        

                        <ul class="dropdown-menu">
                           
                            <li><?php echo url('Ajouter une formation','formation/ajouter'); ?></li>
                            <li><?php echo url('Modifier une formation','formation/modifier'); ?></li>
                            <li><?php echo url('Supprimer une formation','formation/supprimer'); ?></li>
                            <li><?php echo url('Rechercher une formation','formation/rechercher'); ?></li>
                            <li><?php echo url('Demande de formation','formation/demande'); ?></li>
                            <li><?php echo url('Mes choix','formation/choix'); ?></li>
                            <li><?php echo url('Historique','formation/historique'); ?></li>
                            <li><?php echo url('Liste des formations','formation/liste'); ?></li>
                       </ul>                
                    </li>
                        
                     
                    <li class="dropdown">                   
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                             <i><img src="<?php echo img_url('news'); ?>"/></i>
                            <span>News</span>
                            <b class="caret"></b>
                        </a>        

                        <ul class="dropdown-menu">
                            <li><?php echo url('Ajouter une News','news/ajouter'); ?></li>
                            <li><?php echo url('Modifier une News','news/modifier'); ?></li>
                            <li><?php echo url('Supprimer une News','news/supprimer'); ?></li>
                       </ul>                
                    </li>
                     
               
                        <li class="dropdown">                   
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                             <i><img src="<?php echo img_url('user'); ?>"/></i>
                            <span>Utilisateurs</span>
                            <b class="caret"></b>
                        </a>        

                        <ul class="dropdown-menu">
                            <li><?php echo url('Rechercher un utilisateur','users/rechercher'); ?></li>
                            <li><?php echo url('Ajouter un utilisateur','users/ajouter'); ?></li>
                            <li><a href="./users.php?action=ajouterGroupe">Ajouter un groupe utilisateur</a></li>
                            <li><a href="./users.php?action=supprimer">Supprimer un utilisateur</a></li>
                            <li><a href="./users.php?action=supprimerGroupe">Supprimer un groupe utilisateur</a></li>
                           
                       </ul>                
                    </li>
                        
                             <li class="dropdown">                  
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                             <i><img src="<?php echo img_url('stat'); ?>"/></i>
                            <span>Statistiques</span>
                            <b class="caret"></b>
                        </a>        

                        <ul class="dropdown-menu">
                            <li><a href="./statistiques.php">Formations Populaires</a></li>
                       </ul>                
                    </li>
                                   
   
                        <li class="dropdown">                   
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                             <i><img src="<?php echo img_url('inscription'); ?>"/></i>
                            <span>Inscriptions</span>
                            <b class="caret"></b>
                        </a>        

                        <ul class="dropdown-menu">
                            <li><a href="./inscription.php">Gérer les inscriptions</a></li>
                            <li><a href="./listeinscriptions.php">Listing des inscriptions</a></li>
                       </ul>                
                   
                        <li class="dropdown">                 
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                             <i><img src="<?php echo img_url('logs'); ?>"/></i>
                            <span>Logs</span>
                            <b class="caret"></b>
                        </a>        

                        <ul class="dropdown-menu">
                            <li><?php echo url('Informations Logs','logs'); ?></li>
                       </ul>                
                    </li>
                     
                    
                </ul>
            </div> <!-- /.subnav-collapse -->

        </div> <!-- /container -->

    </div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->


<!-- Modal bureau -->
    <div id="bureau" class="modal hide fade">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h3>Configuration du bureau</h3>
     </div>
        <form action="" method="GET" >
    <div class="modal-body">
        <p><img src="<?php echo img_url('font_plus'); ?>" />&nbsp;Augmenter la taille de la police</p>
        <img src="<?php echo img_url('pinceau'); ?>" />&nbsp;Changer la couleur du bureau
        <div id="colorpicker" class="input-append color"  name="colors" data-color-format="rgb" data-color="rgb(255, 146, 180)">
            <input type="hidden" name="colors">
           <span class="add-on">
<i style="background-color: #333333;"></i>
</span>
</div>
    </div>
    
        <div class="modal-footer">
            <button class="btn">Fermer</button>
            <button type="submit" class="btn btn-primary" id="pushColor" name="changeColors">Appliquer les changements</button>
        </div>
        </form>
    </div>

<!-- /fin de modal bureau -->



<!-- Modal fomation -->

<div id="formation" class="modal hide fade">
    <form action="#" method="POST">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h3>Configuration du bureau</h3>
     </div>
     <div class="modal-body">
        <p>Configuration du Mail de l'administrateur</p>
             <input type="text" id="couriel_admin" name="mailadmin" placeholder="Email@erdf-grdf.fr" />
     </div>
        <div class="modal-footer">
           <button class="btn">Fermer</button>
            <button type="submit" class="btn btn-primary" id="pushmail" name="changemail">Appliquer les changements</button>
        </div>
     </form>
    </div>


        </div>
    <div id="conteneur">
        <?php echo $output; ?>
    </div>
    



<!-- Insert Javascript ############################################### -->
<script src="<?php echo js_url('jquery'); ?>" type="text/javascript"></script>
<script src="<?php echo js_url('script'); ?>" type="text/javascript"></script>
<script src="<?php echo js_url('raty'); ?>" type="text/javascript"></script>
<script src="<?php echo js_url('jqueryui'); ?>" type="text/javascript"></script>
<script src="<?php echo js_url('datepickerFr'); ?>" type="text/javascript"></script>
<script src="<?php echo js_url('duallist'); ?>" type="text/javascript"></script>
<script src="<?php echo js_url('bootstrap'); ?>" type="text/javascript"></script>
<script src="<?php echo js_url('holder'); ?>" type="text/javascript"></script>
<script src="<?php echo js_url('inputmask'); ?>" type="text/javascript"></script>
<script src="<?php echo js_url('fileupload'); ?>" type="text/javascript"></script>
<script src="<?php echo js_url('highcharts'); ?>" type="text/javascript"></script>
<script src="<?php echo js_url('bootstrap-colorpicker'); ?>" type="text/javascript"></script>
<!-- Fin d'insert javascript ############################################ -->
<script>
 /////////////////////////////////////Graphique HightCharts
    // Radialize the colors
        Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function(color) {
            return {
                radialGradient: { cx: 0.5, cy: 0.3, r: 0.7 },
                stops: [
                    [0, color],
                    [1, Highcharts.Color(color).brighten(-1.8).get('rgb')] // darken
                ]
            };
        });
        
        // Build the chart
    $('#graph').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Formations CampuS 2013 (Nbr de vues)'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage}%</b>',
                        percentageDecimals: 1
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        color: '#000000',
                        connectorColor: '#000000',
                        formatter: function() {
                            return '<b>'+ this.point.name +'</b>: '+ Math.round(this.percentage) +' %';
                        }
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Formations',
                data: [['Formation',23],['Test2',25],['Formation3',15]
  
                    
                ]
            }]
        });
</script>