 <div class="main">

                <div class="container">

                    <div class="row">

                        <div class="span6">

                            <div class="widget stacked">

                                <div class="widget-header">
                                    <i class="icon-star"></i>
                                    <h3>Recherche Utilisateurs</h3>
                                </div> <!-- /widget-header -->

                                <div class="widget-content">
                                    <form id="formusers" action="" method="POST">
                                        <div class="control-group">
                                            <label class="control-label">Utilisateur(s) :</label>
                                            <div class="controls">
                                                <input type="text" name="searchusers" id="searchusers" placeholder="Recherche">
                                            </div>
                                        </div>
                                    </form>
                                    <div id="results_users">
                                        
                                        <!-- AJAX RESULT -->

                                    </div>



                                </div> <!-- /widget-content -->

                            </div> <!-- /widget -->	


                        </div> <!-- /span6 -->


                        <div class="span6">

                            <div class="widget stacked">

                                <div class="widget-header">
                                    <i class="icon-star"></i>
                                    <h3>Profil Utilisateur</h3>
                                </div> <!-- /widget-header -->
                                <div class="widget-content">

                                    <div id="details_users"></div>

                                </div> <!-- /widget-content -->

                            </div> <!-- /widget -->	

                        </div> <!-- /span6 -->

                    </div> <!-- /row -->

                </div> <!-- /container -->

            </div> <!-- /main -->
            <script type="text/javascript">
                /// Search users 
  
   $("#searchusers").keyup(function(){
       $('#results_users').html('');
      var inputValues = $("#searchusers").val();
      if(inputValues.length > 1){
           $.ajax({
           type: "POST",
           url: "<?php echo site_url('users/userssearch'); ?>",
           data : {'name' : inputValues}, //{'type' : type},
            success: function(data){
                    $('#results_users').html(data);         
           }
           
        });
   }
  });
            </script>