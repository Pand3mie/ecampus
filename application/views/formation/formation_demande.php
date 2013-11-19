 <div class="main">

                <div class="container">

                    <div class="row">

                        <div class="span6">

                            <div class="widget stacked">

                                <div class="widget-header">
                                    <i class="icon-star"></i>
                                    <h3>Demande de formation</h3>
                                </div> <!-- /widget-header -->

                                <div class="widget-content">

                                    <form id="demande_formations" action="" method="POST">

                                        <div class="control-group">
                                            <label class="control-label">Objet :</label>
                                            <div class="controls">
                                                <input class="span4" type="text" name="Objet_demande" id="Objet_demande" placeholder="Objet...">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label">Mot(s) Clef<span style="font-size:9px;"> (separe d'une virgule)</span> :</label>
                                            <div class="controls">
                                                <input class="span4" type="text" name="motclef" id="motclef" placeholder="Mot(s) Clef...">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label">Message :</label>
                                            <div class="controls">
                                                <textarea name="message_formation" id="message_formation" placeholder="Contenu..." style="min-height: 200px;min-width: 500px;"></textarea>
                                            </div>
                                        </div>
                                        <button class="btn" value="ajouter">Annuler</button>
                                        <button type="submit" class="btn btn-warning" value="Envoyer" name="confirm_mail">Confirmer</button>
                                    </form>

                                </div> <!-- /widget-content -->

                            </div> <!-- /widget -->


                        </div> <!-- /span6 -->

                    </div> <!-- /row -->

                </div> <!-- /container -->

            </div> <!-- /main -->

