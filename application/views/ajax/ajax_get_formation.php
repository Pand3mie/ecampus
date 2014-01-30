<?php session_start(); ?>
<?php include '../config/config.php'; ?>
<?php
       
      $id = $_GET['id'];
      $users = $_GET['users'];
      $sql = mysql_query("SELECT * FROM formation WHERE id_formation = '$id' ");
      $sqli = mysql_query("UPDATE formation SET nbre_vue_formation = nbre_vue_formation + 1 WHERE id_formation= '$id' ");
     while ($requete = mysql_fetch_array($sql)) { ?>
        <div class="widget stacked">

                                    <div class="widget-header">
                                        <i class="icon-folder-open"></i>
                                        <h3>Détail(s)</h3>
                                    </div> <!-- /widget-header -->

                                    <div class="widget-content">
  <ul class="media-list">
    <li class="media">
    <a class="pull-left" href="#">
    <img class="media-object" data-src="./assets/js/holder.js/132x170">
    </a>
    <div class="media-body">
           <!-- Nested media object -->
    <div class="media">
        <p>Titre  : <span style="text-decoration: underline;font-weight: bold;"><?php echo $requete['titre_formation']; ?></span></p>
        <p>Référence : <?php echo $requete['ref_formation']; ?></p> 
        <p>Mot(s) Clef(s) associé(s) :  <?php echo $requete['motclef_formation']; ?></p>
        <p>Votez : <span id="star"></span></p>
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
    </div>
    </div>
  <script>
$('#star').raty({
    click: function(score) {
    alert('ID: ' + $(this).attr('id') + "\nscore: " + score);
    }
  });
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


