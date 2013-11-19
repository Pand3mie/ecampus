      <?php
     foreach ($getid as $requete) { ?>
   
  <ul class="media-list">
    <li class="media">
    <a class="pull-left" href="">
   <?php if($requete['picture_users'] == ''){ ?>
    <img class="media-object" data-src="assets/js/holder.js/132x170" />
         
         <?php
         
         }else{?>
         <?php $uri = base_url(); ?>
             <img alt="" <?php fctaffichimage(($uri.'assets/upload/'.$requete['picture_users']),132,170) ?> />
             
        <?php } ?>
    </a>
    <div class="media-body">
    <h4 class="media-heading" style="text-decoration: underline"><?php echo utf8_encode($requete['nom_users'].' '.$requete['prenom_users']); ?></h4>
        <!-- Nested media object -->
    <div class="media">
        <p>NNI : <?php echo $requete['nni']; ?></p>
        <p>Email : <a href="mailto:<?php echo $requete['email_users']; ?>"><?php echo $requete['email_users']; ?></a></p>
       
      
         
        <p>Cat&eacute;gorie : <?php echo $requete['trig_groupe']; ?></p>
       
  <?php        
  /////////Formatage numéro de téléphone
  $Str=$requete['tel_users'];
  $Str=wordwrap($Str,2,".",1);
  $Str=substr($Str,0,strlen($Str)); 
  ////////////////////////////////////////////////

  ?>
        <p>T&eacute;l&eacute;phone : <?php echo $Str; ?></p> 
        <p>Droit utilisateur : <?php if($requete['droits_users'] = 2){echo 'Administrateur'; }else{  echo 'Agent'; } ?></p>
        <div class="accordion" id="accordion2">
<div class="accordion-group">
<div class="accordion-heading">
<a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne" onclick="changeImage(this);"><span class="collapse_statut"><img id="image0" src="<?php echo base_url(); ?>assets/img/collapse_plus.png"/> </span>
Formation(s) Suivie(s) :
</a>
</div>
<div id="collapseOne" class="collapse">
<div class="accordion-inner">
<?php if ($formation == NULL) {
  echo 'Aucune formation suivie';
}else{
 foreach ($formation as $row) {
    echo $row['ref_formation'].'  -  '.$row['titre_formation'].'<br>';
}
     }
?>
</div>
</div>
</div>
</div>
        
 <?php } 
  
 ?>
<?php
function fctaffichimage($img_Src, $W_max, $H_max) {

 if (file_exists($img_Src)) {
   // ---------------------
   // Lit les dimensions de l'image source
   $img_size = getimagesize($img_Src);
   $W_Src = $img_size[0]; // largeur source
   $H_Src = $img_size[1]; // hauteur source
   // ---------------------
   if(!$W_max) { $W_max = 0; }
   if(!$H_max) { $H_max = 0; }
   // ---------------------
   // Teste les dimensions tenant dans la zone
   $W_test = round($W_Src * ($H_max / $H_Src));
   $H_test = round($H_Src * ($W_max / $W_Src));
   // ---------------------
   // si l'image est plus petite que la zone
   if($W_Src<$W_max && $H_Src<$H_max) {
      $W = $W_Src;
      $H = $H_Src;
   // sinon si $W_max et $H_max non definis
   } elseif($W_max==0 && $H_max==0) {
      $W = $W_Src;
      $H = $H_Src;
   // sinon si $W_max libre
   } elseif($W_max==0) {
      $W = $W_test;
      $H = $H_max;
   // sinon si $H_max libre
   } elseif($H_max==0) {
      $W = $W_max;
      $H = $H_test;
   // sinon les dimensions qui tiennent dans la zone
   } elseif($H_test > $H_max) {
      $W = $W_test;
      $H = $H_max;
   } else {
      $W = $W_max;
      $H = $H_test;
   }
   // ---------------------
 } else { // si le fichier image n existe pas
      $W = 132;
      $H = 170;
 }
 // ---------------------------------------------------
 // Affiche : src="..." width="..." height="..." pour la balise img
 echo ' src="'.$img_Src.'" width="'.$W.'" height="'.$H.'"';
 // ---------------------------------------------------
};
?>        
  <script>
function changeImage(element)
{
  var x = document.getElementById("image0");
  var v = x.getAttribute("src");
  if(v == "<?php echo base_url(); ?>assets/img/collapse_plus.png")
    v = ("<?php echo base_url(); ?>assets/img/collapse_moins.png");
  else
    v = ("<?php echo base_url(); ?>assets/img/collapse_plus.png");
  x.setAttribute("src", v);	
}
</script>      
                        
          
