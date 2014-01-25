<div class="main">

    <div class="container">

        <div class="row">
     <?php  foreach($group as $r):?>
         
            <div class="span6">

                <div class="widget stacked">

                    <div class="widget-header">
                        <i class="icon-star"></i>
                        <h3>Groupe utilisateur <?php echo $r['trig_groupe'];  ?></h3>
                    </div> <!-- /widget-header -->
                    <div class="widget-content" 
                         <?php 
                         if ($r['id_users'] == $users){
                             echo 'style="background-color:#4d4d4d;"';
                         } 
                         ?>
                         >
                        <div id="chart-stats" class="stats">
    <ul class="media-list">
    <li class="media">
    <a class="pull-left" href="#">
        <?php if($r['picture_users'] == ''){ ?>
    <img class="media-object" data-src="assets/js/holder.js/132x170" />
         
         <?php
         
         }else{?>
         
             <img alt="" <?php fctaffichimage(base_url().'upload/'.$r['picture_users'] , 132,170) ?> />
             
        <?php } ?>
        
    </a>
    <div class="media-body">
        <h4 class="media-heading" style="text-decoration: underline"><?php echo $r['nom_users'].' '.$r['prenom_users'] ?></h4>
        <!-- Nested media object -->
    <div class="media">
        <p>NNI : <?php echo $r['nni']; ?></p>
        <p>Email : <a href="mailto:<?php echo $r['email_users']; ?>"><?php echo $r['email_users']; ?></a></p> 
        <p>Cat&eacute;gorie : <?php echo $r['trig_groupe']; ?></a></p>
        <?php
        
 /////////Formatage numéro de téléphone
$Str=$r['tel_users'];

////////////////////////////////////////////////

        ?>
        <p>T&eacute;l&eacute;phone : <?php echo $Str; ?></a></p> 
        <p>Droit utilisateur : <?php if($r['droits_users'] = 2){
            echo 'Administrateur'; }else{echo 'Agent';}
             ?></a></p> 
    </div>
    </div>
    </li>
    </ul>
                        
                        </div> <!-- /substats -->

                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->	

            </div> <!-- /span6 -->
                <?php endforeach; ?>
        </div>
    </div>
</div>
        

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
      $W = 0;
      $H = 0;
 }
 // ---------------------------------------------------
 // Affiche : src="..." width="..." height="..." pour la balise img
 echo ' src="'.$img_Src.'" width="'.$W.'" height="'.$H.'"';
 // ---------------------------------------------------
};
?>