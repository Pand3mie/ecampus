<?php
//**************************************
//     fonction pour premier select     //
//**************************************
	function getTierOne()
	{
           	    $result = mysql_query("SELECT DISTINCT trig_groupe,id_groupe FROM groupe") or die(mysql_error());
                            echo'<option value="all_groups">TOUS</option>';    
	      while($tier = mysql_fetch_array( $result ))
	 
	        {
	           echo  '<option value="'.$tier['id_groupe'].' " name="">'.$tier['trig_groupe'].'</option>';
	        }
	 
	}
	 
	//**************************************
//     chained select     //
//**************************************
if(isset($_GET['func']) == "drop_1" && isset($_GET['func'])) { 
   drop_1($_GET['drop_var']); 
}

function drop_1($drop_var)
{  
    
                    if($drop_var == 'all_groups'){
                        $result = mysql_query("SELECT * FROM users") 
	or die(mysql_error());
                    }else{
	$result = mysql_query("SELECT * FROM users WHERE categorie='$drop_var'") 
	or die(mysql_error());
                    }
	echo '<select name="agent" id="tier_two">
	      <option value=" " disabled="disabled" selected="selected">Choix de l\'agent</option>
	      <option value="all_users">TOUS</option>';

		   while($drop_2 = mysql_fetch_array( $result )) 
			{
			  echo '<option value="'.utf8_encode($drop_2['id_users']).'">'.utf8_encode($drop_2['nom_users']).' '.utf8_encode($drop_2['prenom_users']).'</option>';
			}
	
    echo '</select> ';
    echo'<br>';
     echo'<br>';
    echo'<div class="control-group">
                <label class="control-label">Choix de la date :</label>
                <div class="controls">
                    Entre <input  type="text" name="date1" id="date_debut" "> et le 
                              <input  type="text" name="date2" id="date_fin" ">
                </div>
                </div>';
    echo'<br>';
    echo'<div class="control-group"><div class="controls">';
    echo '<button type="submit" class="btn btn-warning" name="submit" value="choix_submit">Valider</button>';
    echo '</div>';
    echo '</div>';
    
}

        ?>

<script>
$("#date_debut").datepicker({dateFormat: "yy-mm-dd"});
$("#date_fin").datepicker({dateFormat: "yy-mm-dd"});
</script>   