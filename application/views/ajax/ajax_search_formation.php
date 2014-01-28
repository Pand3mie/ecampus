<script>
$('a').on('click', function() {
  alert ('ok');
        var id = $(this).attr('id');
             $.ajax({
           type: "GET",
           url: <?php echo base_url(); ?>"/ajax_affiche_formations.php",
           data : 'getidformation='+ id, //
            success: function(data){
                    $('#details_formation').html(data);         
           }
        
        });
});
</script>
      
     <?php foreach ($getValue as $value):?>
      <i class="icon-book"></i><a href="#" id="<?php echo $value['id_formation']; ?>" > Formation Réf: <?php echo $value['ref_formation']; ?>  ||  <?php echo $value['titre_formation']; ?></a>
      <br><br>
      <?php $contenu = $value['contenu_formation']; ?>
      <p><?php echo utf8_encode(substr("$contenu",0, 150)).'...'; ?></p>
      <br>        
     
   <?php endforeach; ?>