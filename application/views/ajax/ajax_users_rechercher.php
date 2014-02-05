<script>
  
$(":checkbox").click(function(){   
    var position = "";
      $('#details_users').html('');      
   $("input:checkbox:checked").each(function(){
    
         position =  position.concat($(this).val());
                $.ajax({
           type: "POST",
           url: "<?php echo site_url('users/details'); ?>",
           data : 'getid='+position, //
            success: function(data){
                    $('#details_users').html(data);         
           }
      });
 });
});

 $('.trash').click(function(){
    var idtrash = $(this).attr('id');
    var valider = confirm("Confirmer la suppression ?");
        if (valider){
                $.ajax({
           type: "GET",
           url: "includes/ajax_delete_users.php",
           data : 'idusers='+ idtrash, //
            success: function(data){
                            
           }
 });
        }
        else{
            return FALSE;
        }
 
});
</script>
<div class="widget stacked widget-table action-table">

    <div class="widget-header portlet-header">
        <i class="icon-th-list"></i>
        <h3>Agents</h3>
    </div> <!-- /widget-header -->

    <div class="widget-content">
            <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>NNI</th>
                    <th>Détails</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php if (isset($rows) && $rows  > 0 ): ?>
                  
                
               <?php foreach ($rows as $key => $row) { ?>
                 
               
                     
                        <tr>
                            <td><?php echo MAJ($row['nom_users']); ?></td>
                            <td><?php echo MAJ($row['prenom_users']); ?></td>
                            <td><?php echo $row['nni']; ?></td>
                            <td><!-- Squared THREE -->
                                <div class="controls" id="check">
                                    <label class="checkbox">
                                        <input type="checkbox" value="<?php echo $row['id_users']; ?>" name="check[]"><i class="icon-question-sign"></i></label>
                                         </div>             

                            </td>
                            <td>
                                <div class="controls">
                         
                                <div id="<?php echo $row['id_users']; ?>" class="trash"><i class="icon-trash"></i></div>
                            </div>  
                                </td>
                        </tr>
            <?php  }  ?> 
            <?php endif ?>
            
            
            
            </tbody>
        </table>
    </div> <!-- /widget-content -->
</div> <!-- /widget -->
<?php if (isset($rows) && $rows == 0 ): ?>
  <div class="alert alert-error"><?php echo "Pas de résultat"; ?></div>
<?php endif ?>

<?php
/* * ***
  fonctions
 * *** */

function safe($var) {
    $var = mysql_real_escape_string($var);
    $var = addcslashes($var, '%_');
    $var = trim($var);
    $var = htmlspecialchars($var);
    return $var;
}

function MAJ($maj) {
    htmlentities($maj,ENT_QUOTES,'UTF-8');
   // $maj = utf8_encode($maj);
    $maj = mb_strtoupper($maj);
    return $maj;
}
?>