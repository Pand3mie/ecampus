<div class="main">

    <div class="container">

        <div class="row">
<?php if($resultat != NULL): ?>
            <div class="span6 column">
                
         <div class="widget widget-nopad stacked portlet">


                    
                    <div class="widget-header portlet-header">
                        <h3>News </h3>
                    </div> <!-- /widget-header -->
                    <div class="pull-right imgnews"><img src="assets/img/paper.png"/></div>
                    <div class="widget-content portlet-content">
                         <?php
                
                foreach($resultat as $r):?>
                     <ul class="news-items">
                            <li>
                                <div class="news-item-detail">										
                                    <a href="#" class="news-item-title"><?php echo $r->titre_news;?></a>
                                    <p class="news-item-preview"><?php echo $r->content_news;?></p>
                                </div>

                                <div class="news-item-date">
                                    <span class="news-item-day">10</span>
                                    <span class="news-item-month">Janv</span>
                                </div>
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
<div class="pull-right imgnews"><img src="assets/img/shortcut.png"/></div>
                    <div class="widget-content portlet-content">
       <div class="accordion" id="accordion2">
              <div class="accordion-group">
                     <div class="accordion-heading" id="collapse">
                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne"><span class="collapse_statut"><img id="image0" src="./assets/img/collapse_plus.png"/> </span>
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
                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"><span class="collapse_statut"><img id="image0" src="./assets/img/collapse_plus.png"/> </span>
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
                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree"><span class="collapse_statut"><img id="image0" src="./assets/img/collapse_plus.png"/> </span>
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
<div class="pull-right imgnews"><img src="assets/img/chart.png"/></div>
                    <div class="widget-content portlet-content">

                       
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

<script>
    
    
 $('.stars').raty({
             readOnly : true,
             score: function() {
                      return $(this).attr('data-score');
                     }
             
         }); 
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
                data: [
                                    <?php while ($row = mysql_fetch_array($stat)) {
                                            
                                            $var .= "['";
                                            $var .= $row['titre_formation'];
                                            $var .= "',";
                                            $var .= ceil($row['nbre_vue_formation']/$som*100);
                                            $var .= "],";
                                            
                                        ?>
      
    <?php } 
  $var1 = substr($var,0,-1);
  echo $var1;
    ?>
                    
                ]
            }]
        });
</script>

