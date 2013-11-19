<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    echo '<h2>Application optimise pour FIREFOX Veuillez contacter l\'administrateur de l\'application ou utiliser un autre navigateur</h2>';
} else {
    ?>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/connexion.php'; ?>
    <?php include 'includes/footer.php'; ?>
    <?php
    if (isset($error_log) && $error_log != '') {
        echo '<div class="err"><div class="alert span4" style="margin-top:20px;">' . $error_log . '<a class="close" data-dismiss="alert" href="index.php">&times;</a></div></div>';
    }
    ?>
<br>
<br>
<br>
<br>
    <div class="container" id="connect">
        <div id="fond"> 
      <div class="ruban">
          <div class="imgbp"></div>
          <h2>CampuS<sup>1.0</sup></h2>     
      </div>     
      <div class="ruban_gauche"></div>
      <div class="ruban_droit"></div>

      <!-- Formulaire connexion -->
      
        <form class="form-signin" method="POST" action="">
            <h2 class="form-signin-heading"><img src="assets/img/logo_erdf.png" /></h2>
            <input type="text" class="input-block-level" placeholder="NNI" name="nni">
            <input type="password" class="input-block-level" placeholder="Mot de passe" name="pwd">
            <button class="btn btn-large btn-primary" type="submit" name="connect">Connexion</button>
           
        </form>
      <div class="erdf"></div>
       <a class="demandeinscription">Demande d'inscription</a>
    </div> <!-- /container -->
</div>
 <div class="container" id="cache">
        <div id="fond"> 
        <!-- Formulaire connexion -->
      
        <form class="form-signin" method="POST" action="">
             <h4 style="text-decoration: underline;">Demande d'inscription</h4><div id="mailto"><img src="assets/img/mailto.png"/></div>
            <p>Pour toute demande d'inscription merci d'indiquer votre NNI et votre nom</p>
            <input type="text" class="input-block-level" placeholder="Votre NNI" name="nni">
            <input type="text" class="input-block-level" placeholder="Votre Nom..." name="name">
            <input type="text" class="input-block-level" placeholder="Votre Mail..." name="mail">
            <button class="btn btn-large btn-alert" type="submit" name="inscription" value="envoyer">Envoyer</button>
        </form>
      </div> <!-- /container -->
</div>
    <?php
        $_SESSION['nni'] = 'A48171';
        $_SESSION['nom'] = 'Fouche';
        $_SESSION['prenom'] = 'Nicolas';
        $_SESSION['droits'] = 3;
        
        
   
        if (!empty($_SESSION['nni'])) {
                function redirige($url)
    {
       die('<meta http-equiv="refresh" content="0;URL='.$url.'">');
    }
       redirige("accueil.php");
        exit;
    }
 
    ?>
<?php
if(isset($_POST['inscription'])){
    $agent = $_POST['mail'];
    $nni = $_POST['nni'];
    $name = $_POST['name'];
    $admin = 'nicolas.fouche@erdf-grdf.fr';
    $headers ='From: "nom"<'.$agent.'>'."\n";
     $headers .='Content-Type: text/html; charset="iso-8859-1"'."\n";
     $headers .='Content-Transfer-Encoding: 8bit';

     $message ='<html><head><title>Un titre ici</title></head><body>Demande de formation de '.$agent.'
<p>NNI = '.$nni.'</p>
<p>NOM = '.utf8_decode($name).'</p>
    

</body></html>';

     if(mail($admin, 'Demande d\'inscription Campus 1.0' , $message, $headers))
     {
     $head ='From: "nom"<'.$agent.'>'."\n";
     $head .='Content-Type: text/html; charset="iso-8859-1"'."\n";
     $head .='Content-Transfer-Encoding: 8bit';

     $mess ='<html><head><title>Un titre ici</title></head><body>
         <p>Bonjour,</p>
        <p>Votre demande à bien été prise en compte, votre inscription sur CAMPUS1.0 sera activée dans les plus bref délais</p>
        <p>Cordialement.</p>
        <br>
        <p style="font-size:9px">Merci de ne pas répondre à ce mail car il est envoyée de maniére automatique</p>
</body></html>';
     sleep(5);
     mail($agent, 'Demande d\'inscription Campus 1.0', utf8_decode($mess), $head);
     }
     else
     {
          echo 'Le message n\'a pu être envoyé';
     } 
    
}
?>
<?php } ?>
