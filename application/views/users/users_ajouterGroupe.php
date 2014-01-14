<div class="main">

                <div class="container">

                    <div class="row">

                        <div class="span6">

                            <div class="widget stacked">

                                <div class="widget-header">
                                    <i class="icon-star"></i>
                                    <h3>Ajouter un Groupe Utilisateur</h3>
                                </div> <!-- /widget-header -->

                                <div class="widget-content">

                                    <!--Formulaire d'ajout utilisateur-->      

                                    <form class="form-horizontal" id="register" method='POST' action="#" >

                                        <div class="control-group">
                                            <label class="control-label">Intitulé du Groupe :</label>
                                            <div class="controls">
                                                <input type="text" class="input-xlarge" id="name_groupe" name="name_groupe">
                                            </div>
                                        </div>  
                                        
                                          <div class="control-group">
                                            <label class="control-label">Abréviation :</label>
                                            <div class="controls">
                                                <input type="text" class="input-xlarge" id="abrv" name="abrv">
                                            </div>
                                        </div>  
    
                                           <div class="control-group">
                                            <label class="control-label">Détail(s) :</label>
                                            <div class="controls">
                                               <textarea name="detail" id="detail" placeholder="Détail(s)..." style="min-height: 110px;min-width: 273px;"></textarea>
                                            </div>
                                        </div>  
                                        
                                        <div class="control-group">
                                            <label class="control-label"></label>
                                            <div class="controls">
                                                <button class="btn" value="annuler">Annuler</button>
                                                <button type="submit" class="btn btn-warning" name="ajoutGroupe" onClick="return del();">Ajouter</button>
                                            </div>
                                        </div>


                                </div> <!-- /widget-content -->

                            </div> <!-- /widget -->	


                        </div>
                    </div>
                </div>    
             </div>