       <?php     $i = 0;
            foreach ($getFormation as $row): ?>
            
            
               <div class="main"><!-- Debut main -->
                    <div class="container"><!-- Debut container -->
                        <div class="row"><!-- Debut row -->
                            <div class="span6"><!-- Debut span6 -->
                               <div class="widget stacked">
                                    <div class="widget-header">
                                        <i class="icon-folder-open"></i>
                                        <h3><?php echo $row->titre_formation; ?></h3>
                                    </div> <!-- /widget-header -->
                                    <div class="widget-content">
                                        <ul class="media-list">
                                            <li class="media">
                                                <div class="media-body">
                                                    <!-- Nested media object -->
                                                    <div class="media">
                                                         <?php if($droits >= 2){  ?> 
                                                        <div id="<?php echo $row->id_formation; ?>" data-statut="<?php if ($row->statut_formation == 'disponible') {
                    echo 1;
                } else {
                    echo 0;
                }
                ?>"
                                                             <?php
                                                             if ($row->statut_formation == 'disponible') {
                                                                 echo 'class="alert alert-success dispo" ';
                                                             } else {
                                                                 echo 'class="alert alert-error dispo" ';
                                                             }
                                                             ?>  > <?php echo $row->statut_formation; ?></div>
                                                        <?php }else{ ?>
                                                            
                                                            <div  data-statut="<?php
                if ($row->statut_formation == 'disponible') {
                    echo 1;
                } else {
                    echo 0;
                }
                ?>"
                                                             <?php
                                                             if ($row->statut_formation == 'disponible') {
                                                                 echo 'class="alert alert-success dispo" ';
                                                             } else {
                                                                 echo 'class="alert alert-error dispo"';
                                                             }
                                                             ?>  >
                                                            
                                                            
                                                            
                                                     <?php   } ?>
                                                        </div><div id="statuts"></div>
                                                        <p>Titre  : <span style="text-decoration: underline;font-weight: bold;"><?php echo $row->titre_formation; ?></span></p>
                                                        <p>Référence : <?php echo $row->ref_formation; ?></p>
                                                        <p>Mot(s) Clef(s) associé(s) :  <?php echo $row->motclef_formation; ?></p>
                                                        <p>Vote : <span id="star"></span></p>
                                                        <p>Nombre de vue : <?php echo $row->nbre_vue_formation; ?></p>
                                                        <p>Auteur du dépot de la formation : <?php echo $row->autor_formation; ?>
                                                        <p>Niveau Formation : <?php echo $row->niveau_formation; ?>
                                                        <div class="accordion" id="accordion2">
                                                            <div class="accordion-group">
                                                                <div class="accordion-heading" id="collapse">
                                                                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse_<?php echo $i; ?>" onclick="changeImage(this);"><span class="collapse_statut"><img id="image0" src="<?php echo img_url('collapse_plus') ?>"/> </span>
                                                                        Détail(s) de la formation :
                                                                    </a>
                                                                </div>
                                                                <div id="collapse_<?php echo $i; ?>" class="collapse">
                                                                    <div class="accordion-inner">

                <?php echo $row->contenu_formation; ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                     <?php 
                                                        if($row->statut_formation == 'disponible'){ 
                                                        echo '<div id="dateCloture">Date de Clôture :'; 
                                              
                                                        echo date('d/m/Y',  strtotime($row->date_formation));
                                                        }else{
                                                            
                                                        }
?></div>
                                                    </div> <!-- /widget-content -->
                                                </div> <!-- /widget -->
                                                </div> 
                                                </div>
                                                </div><!-- /span6 -->
                                                </div><!-- Fin de row -->
                                                </div><!-- Fin de container -->
                                                </div><!-- Fin de main -->
<?php endforeach; ?>
                                                <?php
                                                $i++;
                                             ?>

                                            