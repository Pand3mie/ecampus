<div class="main">

    <div class="container">

        <div class="row">

            <div class="span6">

                <div class="widget stacked">

                    <div class="widget-header">
                        <i class="icon-star"></i>
                        <h3>Ajouter une News</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                        
   <!--Formulaire d'ajout utilisateur-->  





<?php echo form_open('',array('class' => 'form','id' => 'register')); ?>  
            
<div class="control-group">
<label class="control-label">Titre :</label>
<div class="controls">
<input type="text" id="user_name" name="titre" value="<?php echo set_value('titre'); ?>">
</div>
</div>
             
<div class="control-group">
<label class="control-label">Contenu :</label>
<div class="controls">
    <textarea class="editor" name="content" value="<?php echo set_value('content'); ?>">
    </textarea>
</div>
</div>
             
           

                          
           
<div class="control-group">
<label class="control-label"></label>
<div class="controls">
<?php echo anchor('../#myModal', 'Ajouter', array('role'=>'button','class'=>'btn btn-warning','data-toggle'=>'modal')) ?>

</div>
</div>
             <!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="myModalLabel">Confirmation</h3>
</div>
<div class="modal-body">
<p>Confirmer la NEWS ?</p>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true">Annuler</button>
<button type="submit" class="btn btn-warning" value="ajouter" name="submit">Confirmer</button>
</div>
</div>
      <?php echo form_close(); ?>
            
                    </div> <!-- /widget-content -->
              
                </div> <!-- /widget -->	


            </div> <!-- /span6 -->
                </div>
                    </div>
                        </div>