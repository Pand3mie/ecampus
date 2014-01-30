<?php
     foreach ($get as $value):?>
  <ul class="media-list">
    <li class="media">
    <a class="pull-left" href="#">
    <img class="media-object" data-src="./assets/js/holder.js/132x170">
    </a>
    <div class="media-body">
           <!-- Nested media object -->
    <div class="media">
        <div id="dispo" 
            <?php if($value['statut_formation'] == 'disponible'){
                echo 'class="alert alert-success" ';
                    }else{
                echo 'class="alert alert-error"'; } ?>><?php echo $value['statut_formation']; ?></div>
        <p>Titre  : <span style="text-decoration: underline;font-weight: bold;"><?php echo $value['titre_formation']; ?></span></p>
        <p>Référence : <?php echo $value['ref_formation']; ?></p> 
        <p>Mot(s) Clef(s) associé(s) :  <?php echo $value['motclef_formation']; ?></p>
        <p>Vote : <span id="star"></span><span id="nocomment"></span></p>
        <p>Nombre de vue : <?php echo $value['nbre_vue_formation']; ?></p>
        <p>Auteur du dépot de la formation : <?php echo $value['autor_formation']; ?>
        <p>Niveau Formation : <?php echo $value['niveau_formation']; ?>
       <div class="accordion" id="accordion2">
              <div class="accordion-group">
                     <div class="accordion-heading" id="collapse">
                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne" onclick="changeImage(this);"><span class="collapse_statut"><img id="image0" src="<?php echo base_url() ?>assets/img/collapse_plus.png"/> </span>
                                   Détail(s) de la formation :
                            </a> 
                     </div>
              <div id="collapseOne" class="collapse">
       <div class="accordion-inner">
              
<?php echo $value['contenu_formation']; ?>
       </div>
              </div>
              </div>
       </div>
     <?php endforeach; ?>

    <?php foreach ($stars as $val): ?>
      <script>
      var o = <?php echo $val['vote']; ?>;
       if (o == 0){
        $('#nocomment').append("<h1>Pas encore de vote pour cette formation</h1>");
         }else{
        $('#star').raty({ readOnly: true,
                          path: '<?php echo base_url() ?>',
                          score: <?php echo $val['vote']; ?> });
          }
    


        function changeImage(element)
        {
        var x = document.getElementById("image0");
        var v = x.getAttribute("src");
        if(v == "<?php echo base_url() ?>assets/img/collapse_plus.png")
        v = ("<?php echo base_url() ?>assets/img/collapse_moins.png");
        else
        v = ("<?php echo base_url() ?>assets/img/collapse_plus.png");
        x.setAttribute("src", v); 
        }
    </script>      
<?php endforeach ?>