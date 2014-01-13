 <div class="main">

                <div class="container">

                    <div class="row">

                        <div class="span6">

                            <div class="widget stacked">

                                <div class="widget-header">
                                    <i class="icon-star"></i>
                                    <h3>Ajouter un Utilisateur</h3>
                                </div> <!-- /widget-header -->

                                <div class="widget-content">

                                    <!--Formulaire d'ajout utilisateur-->      

                                    <form class="form-horizontal" id="register" method='POST' action="" enctype="multipart/form-data">

                                        <div class="control-group">
                                            <label class="control-label">NNI</label>
                                            <div class="controls">
                                                <input type="text" class="input-xlarge" id="user_nni" name="nni">
                                            </div>
                                        </div>  



                                        <div class="control-group">
                                            <label class="control-label">Nom</label>
                                            <div class="controls">
                                                <input type="text" class="input-xlarge" id="user_name" name="nom">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label">Pr&eacute;nom</label>
                                            <div class="controls">
                                                <input type="text" class="input-xlarge" id="user_prenom" name="prenom">
                                            </div>
                                        </div>



                                        <div class="control-group">
                                            <label class="control-label">Email</label>
                                            <div class="controls">
                                                <input type="text" class="input-xlarge" id="user_email" name="mail">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label">T&eacute;l&eacute;phone</label>
                                            <div class="controls">
                                                <input type="text" class="input-xlarge" id="user_tel" name="tel" data-mask="99.99.99.99.99">
                                            </div>
                                        </div>            

                                        <div class="control-group">
                                            <label class="control-label">Groupe</label>
                                            <div class="controls">
                                                <select name="user_select">
                                                    <option selected>Selectionnez...</option>
                                                    <?php foreach ($groupe as $select): ?>
                                                         <option value="<?php echo $select['id_groupe']; ?>"><?php echo $select['trig_groupe']; ?></option>
                                                    <?php endforeach ?>
                                               </select>
                                            </div>
                                        </div>


                                        <div class="control-group">
                                            <label class="control-label"></label>
                                            <div class="controls">
                                                <button type="submit" class="btn btn-warning" name="saveUsers">Ajouter</button>
                                            </div>
                                        </div>
                                 

                                </div> <!-- /widget-content -->

                            </div> <!-- /widget -->	


                        </div> <!-- /span6 -->

                        <div class="span6">

                            <div class="widget stacked">

                                <div class="widget-header">
                                    <i class="icon-star"></i>
                                    <h3>Ajouter une photo</h3>
                                </div> <!-- /widget-header -->

                                <div class="widget-content">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-preview thumbnail" style="width: 200px; height: 150px;"></div>
                                        <div>
                                            <span class="btn btn-file"><span class="fileupload-new">Selectionnez une image</span><span class="fileupload-exists">Changer</span><input type="file" name="myimage"/></span>
                                            <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Retirer</a>
                                        </div>
                                    </div> 
                                </div><!-- /widget-content -->

                            </div>

                        </div><!-- /span6 -->
                        </form>         
                    </div> <!-- /row -->

                </div> <!-- /container -->

            </div> <!-- /main -->
<?php

$path = "upload/";
$valid_formats = array("jpg", "png", "gif", "bmp","jpeg");

if(isset($_POST['saveUsers']))
{
$nni = $_POST['nni'];
$nom = $_POST['nom']; 
$prenom = $_POST['prenom']; 
$mail = $_POST['mail']; 
$tel = $_POST['tel']; 
$select = $_POST['user_select']; 
$name = $_FILES['myimage']['name'];
$size = $_FILES['myimage']['size'];
if(strlen($name))
{
list($txt, $ext) = explode(".", $name);
if(in_array($ext,$valid_formats))
{
if($size<(1024*1024)) // Image size max 1 MB
{
$actual_image_name = time().$nni.".".$ext;
$tmp = $_FILES['myimage']['tmp_name'];
if(move_uploaded_file($tmp, $path.$actual_image_name))
{
//mysql_query("UPDATE users SET picture_users ='$actual_image_name' WHERE nni ='$nni'");
   mysql_query("INSERT INTO users (id_users,nom_users,prenom_users,categorie,nni,email_users,picture_users,tel_users) 
                            VALUES ('','$nom','$prenom','$select','$nni','$mail','$actual_image_name','$tel') ");
  
}
else
echo "failed";
}
else
echo "Image file size max 1 MB";
}
else
echo "Invalid file format..";
}
else
echo "Please select image..!";
exit;
}
?>
