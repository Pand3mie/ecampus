<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    echo '<h2>Application optimise pour FIREFOX Veuillez contacter l\'administrateur de l\'application ou utiliser un autre navigateur</h2>';
} else {
    ?>
      <meta http-equiv="content-type" content="text/html;charset=utf-8" />
       <!-- Insert Css ################################################# -->

        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="<?php echo css_url('bootstrap'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo css_url('base'); ?>" >
        <link rel="stylesheet" type="text/css" href="<?php echo css_url('colorpicker'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo css_url('base_responsive'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo css_url('dashboard'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo css_url('duallist'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo css_url('style'); ?>">
    <!--    <link rel="stylesheet" type="text/css" href="assets/css/jqueryui/jquery-ui-1.10.2.custom.css">
         <link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">-->
        <link rel="stylesheet" type="text/css" href="<?php echo css_url('bootstrap-responsive'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo css_url('bootstrap-wysihtml5'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo css_url('datepicker'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo css_url('jquery-ui'); ?>">
        <!-- Fin d'insert Css ################################################ -->
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
        <?php echo form_open('connexion/verifylogin',array('class' => 'form-signin')); ?>
             <h2 class="form-signin-heading"><img src="<?php echo img_url('logs'); ?>" style="visibility: hidden;"/></h2><div class="error_logs"><?php echo validation_errors(); ?></div>
            <input type="text" class="input-block-level" placeholder="NNI" name="nni">
            <input type="password" class="input-block-level" placeholder="Mot de passe" name="pwd_users">
            <input class="btn btn-large btn-primary" type="submit" value="Connexion">
        <?php echo form_close(); ?>

      <div class="erdf"></div>
       <a class="demandeinscription">Demande d'inscription</a>
    </div> <!-- /container -->
</div>

 <div class="container" id="cache">
        <div id="fond"> 
        <!-- Formulaire connexion -->
      
        <form class="form-signin" method="POST" action="">
             <h4 style="text-decoration: underline;">Demande d'inscription</h4><div id="mailto"><img src="<?php echo img_url('mailto'); ?>" /></div>
            <p>Pour toute demande d'inscription merci d'indiquer votre NNI et votre nom</p>
            <input type="text" class="input-block-level" placeholder="Votre NNI" name="nni">
            <input type="text" class="input-block-level" placeholder="Votre Nom..." name="name">
            <input type="text" class="input-block-level" placeholder="Votre Mail..." name="mail">
            <button class="btn btn-large btn-alert" type="submit" name="inscription" value="envoyer">Envoyer</button>
        </form>
      </div> <!-- /container -->
</div>
   
<?php } ?>
<!-- Insert Javascript ############################################### -->
<script src="<?php echo js_url('jquery'); ?>" type="text/javascript"></script>
<script src="<?php echo js_url('script'); ?>" type="text/javascript"></script>
<script src="<?php echo js_url('raty'); ?>" type="text/javascript"></script>
<script src="<?php echo js_url('jqueryui'); ?>" type="text/javascript"></script>
<script src="<?php echo js_url('datepickerFr'); ?>" type="text/javascript"></script>
<script src="<?php echo js_url('duallist'); ?>" type="text/javascript"></script>
<script src="<?php echo js_url('bootstrap'); ?>" type="text/javascript"></script>
<script src="<?php echo js_url('holder'); ?>" type="text/javascript"></script>
<script src="<?php echo js_url('inputmask'); ?>" type="text/javascript"></script>
<script src="<?php echo js_url('fileupload'); ?>" type="text/javascript"></script>
<script src="<?php echo js_url('highcharts'); ?>" type="text/javascript"></script>
<script src="<?php echo js_url('bootstrap-colorpicker'); ?>" type="text/javascript"></script>
<!-- Fin d'insert javascript ############################################ -->
<script>
