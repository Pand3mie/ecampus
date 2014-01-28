 <?php session_start(); ?>
<?php include '../config/config.php'; ?>
<?php
       $id = $_GET['getidformation'];
      $sql = mysql_query("SELECT * FROM formation WHERE id_formation = '$id' ");
      $sqli = mysql_query("UPDATE formation SET nbre_vue_formation = nbre_vue_formation + 1 WHERE id_formation= '$id' ");
     while ($requete = mysql_fetch_array($sql)) { ?>
  <ul class="media-list">
    <li class="media">
    <a class="pull-left" href="#">
    <img class="media-object" data-src="./assets/js/holder.js/132x170">
    </a>
    <div class="media-body">
           <!-- Nested media object -->
    <div class="media">
        <div id="dispo" 
            <?php if($requete['statut_formation'] == 'disponible'){
                echo 'class="alert alert-success" ';
                    }else{
                echo 'class="alert alert-error"'; } ?>><?php echo $requete['statut_formation']; ?></div>
        <p>Titre  : <span style="text-decoration: underline;font-weight: bold;"><?php echo $requete['titre_formation']; ?></span></p>
        <p>Référence : <?php echo $requete['ref_formation']; ?></p> 
        <p>Mot(s) Clef(s) associé(s) :  <?php echo $requete['motclef_formation']; ?></p>
        <p>Vote : <span id="star"></span><span id="nocomment"></span></p>
        <p>Nombre de vue : <?php echo $requete['nbre_vue_formation']; ?></p>
        <p>Auteur du dépot de la formation : <?php echo utf8_encode($requete['autor_formation']); ?>
        <p>Niveau Formation : <?php echo utf8_encode($requete['niveau_formation']); ?>
       <div class="accordion" id="accordion2">
              <div class="accordion-group">
                     <div class="accordion-heading" id="collapse">
                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne" onclick="changeImage(this);"><span class="collapse_statut"><img id="image0" src="./assets/img/collapse_plus.png"/> </span>
                                   Détail(s) de la formation :
                            </a> 
                     </div>
              <div id="collapseOne" class="collapse">
       <div class="accordion-inner">
              
<?php echo utf8_encode($requete['contenu_formation']); ?>
       </div>
              </div>
              </div>
       </div>
        <?php $st = mysql_query("SELECT vote.vote,vote.id_formations FROM vote WHERE id_formations = '$id' ");  
                   $stars = mysql_fetch_assoc($st);
        
        ?>
<script>
 var o = <?php echo $stars['vote']; ?>;
 if (o == 0){
 $('#nocomment').append("<h1>Pas encore de vote pour cette formation</h1>");
 }else{
$('#star').raty({ readOnly: true, score: <?php echo $stars['vote']; ?> });
}
function changeImage(element)
{
  var x = document.getElementById("image0");
  var v = x.getAttribute("src");
  if(v == "./assets/img/collapse_plus.png")
    v = ("./assets/img/collapse_moins.png");
  else
    v = ("./assets/img/collapse_plus.png");
  x.setAttribute("src", v);	
}
</script>      
 <?php } 
  
 ?>
