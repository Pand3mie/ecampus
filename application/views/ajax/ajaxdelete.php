
<div class="controls"> 
<?php foreach ($news as $key => $row) { ?>   
    <input type="hidden" value="<?php echo $row['id_news'] ?>" name="idnews"/>         
<div class="control-group">
<label class="control-label">Titre :</label>

<input type="text" class="input-xlarge" id="user_name" name="titre" value="<?php echo $row['titre_news'] ?>" readonly>
</div>
</div>
             
<div class="control-group">
<label class="control-label">Contenu :</label>
<div class="controls">
    <textarea class="editor" name="content" style="min-height: 200px;" readonly><?php echo $row['content_news']  ?>
    </textarea>
</div>
</div>
 
<div class="control-group">
<label class="control-label"></label>
<div class="controls">
<?php echo anchor('../#myModal', 'Supprimer', array('role'=>'button','class'=>'btn btn-warning','data-toggle'=>'modal')) ?>
    
    <button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
</div>
</div>
                         <!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="myModalLabel">Confirmation</h3>
</div>
<div class="modal-body">
<p>Confirmer la Suppression ?</p>
</div>

<form class="form" id="register" method="post" action="supprimer/<?php echo $row['id_news'] ?>" >
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
<button type="submit" class="btn btn-warning" value="supprimer" name="submit">Confirmer</button>
</div>
</div>
</form>
      

<?php } ?>