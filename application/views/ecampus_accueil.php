<div class="main">

    <div class="container">

        <div class="row">
<?php if($resultat != NULL): ?>
            <div class="span6 column">
                
         <div class="widget widget-nopad stacked portlet">


                    
                    <div class="widget-header portlet-header">
                        <h3>News </h3>
                    </div> <!-- /widget-header -->
                    <div class="pull-right imgnews"><img src="<?php echo img_url('paper') ?>"/></div>
                    <div class="widget-content portlet-content">
                         <?php
                
                foreach($resultat as $r):?>
                     <ul class="news-items">
                            <li>
                            <table>
                                <tr>
                                    <td class="tabletd">
                                        <div class="news-item-detail">                                      
                                            <a href="#" class="news-item-title"><?php echo $r->titre_news;?></a>
                                            <p class="news-item-preview"><?php echo $r->content_news;?></p>
                                        </div>
                                    </td>
                                    <td class="tabletr">
                                     <div class="news-item-date">
                                        <span class="news-item-day">10</span>
                                        <span class="news-item-month">Janv</span>
                                    </div>
                                    </td>
                                </tr>
                            </table>
                            </li>
                       </ul>
                      <?php endforeach;?>
                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->	
                <?php endif; ?>
                       <div class="widget stacked portlet">

                    <div class="widget-header portlet-header">
                          <h3>Raccourcis</h3>
                    </div> <!-- /widget-header -->
<div class="pull-right imgnews"><img src="<?php echo img_url('shortcut') ?>"/></div>
                    <div class="widget-content portlet-content">
       <div class="accordion" id="accordion2">
              <div class="accordion-group">
                     <div class="accordion-heading" id="collapse">
                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne"><span class="collapse_statut"><img id="image0" src="<?php echo img_url('collapse_plus') ?>"/> </span>
                                   Agence Raccordement :
                            </a> 
                     </div>
              <div id="collapseOne" class="collapse">
       <div class="accordion-inner">
               <div class="shortcuts">
                            <a href="https://intraneterdf.fr/" class="shortcut">
                                <i class=" icon-list-alt"></i>
                                <span class="shortcut-label">Intranet</span>
                            </a>

                            <a href="http://clay8ing.cla.edfgdf.fr/" class="shortcut">
                                <i class=" icon-bookmark"></i>
                                <span class="shortcut-label">OSR</span>								
                            </a>

                            <a href="https://sge.edfdistribution.fr/" class="shortcut">
                                <i class=" icon-signal"></i>
                                <span class="shortcut-label">SGE</span>	
                            </a>

                            <a href="http://pgi-gta.edf.fr/" class="shortcut">
                                <i class=" icon-comment"></i>
                                <span class="shortcut-label">PGI-GTA</span>								
                            </a>

                            <a href="https://aladin.erdfdistribution.fr/aladin/" class="shortcut">
                                <i class=" icon-user"></i>
                                <span class="shortcut-label">ALADIN</span>
                            </a>

                            <a href="http://raccordement-cuau.erdfdistribution.fr/" class="shortcut">
                                <i class=" icon-file"></i>
                                <span class="shortcut-label">CU-AU</span>	
                            </a>

                            <a href="https://distri-caraibe.edf.fr/" class="shortcut">
                                <i class=" icon-picture"></i>
                                <span class="shortcut-label">CARAIBE</span>	
                            </a>

                            <a href="https://poste-restante.edf.fr/" class="shortcut">
                                <i class=" icon-tag"></i>
                                <span class="shortcut-label">Poste Restante</span>
                            </a>				
                        </div> <!-- /shortcuts -->	

       </div>
              </div>
                       <div class="accordion-heading" id="collapse">
                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"><span class="collapse_statut"><img id="image0" src="<?php echo img_url('collapse_plus') ?>"/> </span>
                                   Ingenierie :
                            </a> 
                     </div>
                   <div id="collapseTwo" class="collapse">
       <div class="accordion-inner">
               <div class="shortcuts">
                            <a href="https://intraneterdf.fr/" class="shortcut">
                                <i class=" icon-list-alt"></i>
                                <span class="shortcut-label">Intranet</span>
                            </a>

                            <a href="http://clay8ing.cla.edfgdf.fr/" class="shortcut">
                                <i class=" icon-bookmark"></i>
                                <span class="shortcut-label">OSR</span>								
                            </a>

                            <a href="https://sge.edfdistribution.fr/" class="shortcut">
                                <i class=" icon-signal"></i>
                                <span class="shortcut-label">SGE</span>	
                            </a>

                            <a href="http://pgi-gta.edf.fr/" class="shortcut">
                                <i class=" icon-comment"></i>
                                <span class="shortcut-label">PGI-GTA</span>								
                            </a>

                            <a href="https://aladin.erdfdistribution.fr/aladin/" class="shortcut">
                                <i class=" icon-user"></i>
                                <span class="shortcut-label">ALADIN</span>
                            </a>

                            <a href="http://raccordement-cuau.erdfdistribution.fr/" class="shortcut">
                                <i class=" icon-file"></i>
                                <span class="shortcut-label">CU-AU</span>	
                            </a>

                            <a href="https://distri-caraibe.edf.fr/" class="shortcut">
                                <i class=" icon-picture"></i>
                                <span class="shortcut-label">CARAIBE</span>	
                            </a>

                            <a href="https://poste-restante.edf.fr/" class="shortcut">
                                <i class=" icon-tag"></i>
                                <span class="shortcut-label">Poste Restante</span>
                            </a>				
                        </div> <!-- /shortcuts -->	

       </div>
              </div>
                       <div class="accordion-heading" id="collapse">
                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree"><span class="collapse_statut"><img id="image0" src="<?php echo img_url('collapse_plus') ?>"/> </span>
                                   Encradrement :
                            </a> 
                     </div>
                               <div id="collapseThree" class="collapse">
       <div class="accordion-inner">
               <div class="shortcuts">
                            <a href="https://intraneterdf.fr/" class="shortcut">
                                <i class=" icon-list-alt"></i>
                                <span class="shortcut-label">Intranet</span>
                            </a>

                            <a href="http://clay8ing.cla.edfgdf.fr/" class="shortcut">
                                <i class=" icon-bookmark"></i>
                                <span class="shortcut-label">OSR</span>								
                            </a>

                            <a href="https://sge.edfdistribution.fr/" class="shortcut">
                                <i class=" icon-signal"></i>
                                <span class="shortcut-label">SGE</span>	
                            </a>

                            <a href="http://pgi-gta.edf.fr/" class="shortcut">
                                <i class=" icon-comment"></i>
                                <span class="shortcut-label">PGI-GTA</span>								
                            </a>

                            <a href="https://aladin.erdfdistribution.fr/aladin/" class="shortcut">
                                <i class=" icon-user"></i>
                                <span class="shortcut-label">ALADIN</span>
                            </a>

                            <a href="http://raccordement-cuau.erdfdistribution.fr/" class="shortcut">
                                <i class=" icon-file"></i>
                                <span class="shortcut-label">CU-AU</span>	
                            </a>

                            <a href="https://distri-caraibe.edf.fr/" class="shortcut">
                                <i class=" icon-picture"></i>
                                <span class="shortcut-label">CARAIBE</span>	
                            </a>

                            <a href="https://poste-restante.edf.fr/" class="shortcut">
                                <i class=" icon-tag"></i>
                                <span class="shortcut-label">Poste Restante</span>
                            </a>				
                        </div> <!-- /shortcuts -->	

       </div>
              </div>
              </div>
       </div>
                       
                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->
                
                <div class="widget stacked portlet">

                    <div class="widget-header portlet-header">
                            <h3>Statistiques Formation</h3>
                    </div> <!-- /widget-header -->
<div class="pull-right imgnews"><img src="<?php echo img_url('chart') ?>"/></div>
                    <div class="widget-content portlet-content">
                        <table>
                                
                        <?php foreach ($vote as $k) { ?>
                        <tr>
                            <td class="tabletd">
                                <blockquote>
                                   <p class="bot" style="font-size:9px;">Référence : <?php echo $k->ref_formation ?> || Vote de <strong><?php echo $k->prenom_users.' '.$k->nom_users ?></strong><br> le <?php echo $k->date_vote ?></p>
                                   <br>
                                   <?php if ($k->commentaires == ''){?>
                                <small>Commentaire : <cite title="Source Title">Pas de Commentaire</cite></small>
                                   <?php }else{?>
                                <small>Commentaire : <cite title="Source Title"><?php echo $k->commentaires ?></cite></small>
                                    <?php } ?>
                                </blockquote>
                            </td>

                            <td class="tabletr">
                                <div class="stars" data-score="<?php echo $k->vote ?>"></div>
                            </td>
                            
                        </tr>
                       <?php } ?>

                       </table>
                    
                    
                       
                       
                    </div> <!-- /widget-content -->
                   
                </div> <!-- /widget -->	

<!--                <div class="widget stacked portlet">

                    <div class="widget-header portlet-header">
                        <i class="icon-file"></i>
                        <h3>Content</h3>
                    </div>  /widget-header 

                    <div class="widget-content portlet-content">

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>


                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>					

                    </div>  /widget-content 

                </div>  /widget -->

            </div> <!-- /span6 -->


            <div class="span6 column">	

                    <div class="widget stacked portlet">

                    <div class="widget-header portlet-header">
                       <h3>Statistiques</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content portlet-content">
                        <div id="graph" style="width:100%; height:400px;"></div>
                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->

              

            </div> <!-- /span6 -->

        </div> <!-- /row -->

    </div> <!-- /container -->

</div> <!-- /main -->



