$(document).ready(function(){

$('.choix_agent').bootstrapDualListbox();
$('.choix_formation').bootstrapDualListbox();
$('.demandeinscription').click(function(){
$('#cache').slideToggle({ duration: 1000, easing: 'easeOutBounce'});
});
$.datepicker.setDefaults({ dateFormat: 'yy-mm-dd' });
$("#datecloture").datepicker();
$('#date_debut').datepicker();
$('#date_fin').datepicker();
$("#slideThree").change(function(){
   if (this.checked){
 $("#cloture").show("fast");
}else{
    $("#cloture").hide("fast");
}

});

////Tooltip Bootstrap sur recherche formation
 
$('#help').tooltip();

// Modification dans la page d'accueil pour voir tout l'article'

              $('a.news-item-title').click(function(){
                  $(this).next("p.news-item-preview")
                           .css("height","auto");
  });
  TriggerClick = 0;

  $("a.news-item-title").click(function(){
     
    if(TriggerClick==0){
         TriggerClick=1;
          $(this).next("p.news-item-preview").animate({height:'auto'}, 500);
    }else{
         TriggerClick=0;
          $(this).next("p.news-item-preview").animate({height:'40px'}, 500);
    };
  });
  
  
  ////////slider pour point formation

 $( "#slider_points" ).slider({
value:100,
min: 0,
max: 200,
step: 10,
slide: function( event, ui ) {
$( "#amount" ).val( ui.value +' Points' );
}
});
$( "#amount" ).val( $( "#slider_points" ).slider( "value" )+' Points' );
  
  ///////  Function pour la valeur du select
  /**Retourne la valeur du select selectId*/
  
function getSelectValue(selectId)
{
	/**On récupère l'élement html <select>*/
	var selectElmt = document.getElementById(selectId);
	/**
	selectElmt.options correspond au tableau des balises <option> du select
	selectElmt.selectedIndex correspond à l'index du tableau options qui est actuellement sélectionné
	*/
	return selectElmt.options[selectElmt.selectedIndex].value;
}

// Search Ajax jquery Pour affichage news dans la partie modif

  $("#choixnews").change(function(){
      var selectValue = getSelectValue('choixnews');
          $.ajax({
           type: "GET",
           url: "includes/ajax_search_news.php",
           data : 'id='+selectValue, // + form.weapons.serialize ,
            success: function(data){
          $('#results').html(data);         
           }
           
        });
  });
  

  
  
  /// Search users 
  
   $("#searchusers").keyup(function(){
       $('#results_users').html('');
      var inputValues = $("#searchusers").val();
      if(inputValues.length > 1){
           $.ajax({
           type: "POST",
           url: "http://localhost/ecampus/users/userssearch",
           data : {'name' : inputValues}, //{'type' : type},
            success: function(data){
                    $('#results_users').html(data);         
           }
           
        });
   }
  });
  
  
    /// Search Formations 
  
   $("#searchformations").keyup(function(){
       $('#results_formations').html('');
       $('#details_formation').html('');
      var inputValues = $("#searchformations").val();
      if(inputValues.length > 1){
           $.ajax({
           type: "POST",
           url: "http://localhost/ecampus/index.php/formation/ajax_recherche/" + inputValues,
           data : 'getformation =' + inputValues, //
            success: function(data){
                    $('#results_formations').html(data);         
           }
           
        });
   }
  });
   

        // changement de couleur bureau
        
        $('#colorpicker').colorpicker().on('changeColor', function(ev){
				bodyStyle.backgroundColor = ev.color.toHex();
        });

     // Affichage de la page de garde avec connexion
     
    $("#connect").css("display", "none");
    $("#connect").slideUp(300).delay(800).fadeIn(400); 
    
    // deplacement des DIV quand on est à l'accueil
    
   $('.dropdown-toggle').dropdown();
   $( ".column" ).sortable({
    connectWith: ".column"
});
   
$( ".portlet" ).addClass( "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" )
.find( ".portlet-header" )
.addClass( "ui-widget-header ui-corner-all" )
.end()
.find( ".portlet-content" );

$( ".portlet-header .ui-icon" ).click(function() {
   
$( this ).toggleClass( "ui-icon-minusthick" ).toggleClass( "ui-icon-plusthick" );
$( this ).parents( ".portlet:first" ).find( ".portlet-content" ).toggle();
});


$( ".column" ).disableSelection();

$('.fileupload').fileupload();
$('.fileuploadformation').fileupload();

 $('#generermdp').click(function(){
$("#refformation").val(Math.round(Math.random()*1000) +90000);
});
 $('#titre_formation').tooltip({'trigger':'focus', 'title': 'Entrez le Titre de la formation','placement':'right'});
                                    $('#mcformation').tooltip({'trigger':'focus', 'title': 'Entrez les mots clefs','placement':'right'});
                                    $('#helpgenerate').tooltip({'trigger':'hover', 'title': 'Bouton de génération de référence','placement':'right'});
                                    $('#Objet_demande').tooltip({'trigger':'hover', 'title': 'Veuillez entrer un Objet','placement':'right'});
                                    $('#motclef').tooltip({'trigger':'hover', 'title': 'Mots clefs à séparer avec une virgule','placement':'right'});
                                    $('#message_formation').tooltip({'trigger':'hover', 'title': 'Contenu de la formation','placement':'right'});

  $("#choixformation, #disponibleformation").sortable({
                                        connectWith: ".connectedSortable",
                                        placeholder: "underground",
                                       update: function () {
                                           // var order1 = $('#choixformation').sortable('toArray').toString();                                       
                                           // var order2 = $('#disponibleformation').sortable('toArray').toString();

                                            //alert("Formation 1:" + order1 + "\n Formation 2:" + order2);
                                            $.ajax({
                                                type: "POST",
                                                url: "includes/ajax_choix_formation.php",
                                                data:
                                                    {
                                                    sort1:$('#choixformation').sortable('serialize'),
                                                    sort2:$('#disponibleformation').sortable('serialize')
                                                    },
                                                 success: function (data) {
                                                         $('#po').html(data);
                                                }
                                            });

                                        }
                                    }).disableSelection();

                                    $('.dispo').click(function() {
                                        
                                                                    
                                    if($(this).hasClass("alert-success")){
                                        $(this).text('non disponible');
                                         $(this).removeClass("alert-success");
                                         $(this).addClass("alert-error");
                                         
                                        }else{
                                        $(this).text('disponible');
                                        $(this).removeClass("alert-error");
                                         $(this).addClass("alert-success");
                                    }
                                        var statut = $(this).attr('data-statut');
                                        var id = $(this).attr('id');
                                        $.ajax({
                                            type: "GET",
                                            async: false,
                                            cache: false,
                                            url: "includes/changestatut.php",
                                            data : 'getidformation=' + id + '&statutinfo=' + statut, 
                                            success: function(data){
                                                $('#statut').html(data);
                                                

                                            }

                                        });

                                    });

                                    $('a#affichageformation').click(function(){
                                        $('#resultformation').html();
                                        var id = $(this).attr('data-id');
                                        var users = $(this).attr('data-users');
                                        $.ajax({
                                            type: "GET",
                                            url: "includes/ajax_getformation.php",
                                            data : 'id=' + id + '&users=' + users, //
                                            success: function(data){
                                                $('#resultformation').html(data);
                                            }

                                        });
                                });

                                    $('#generermdp').click(function(){
                                        $("#refformation").val(Math.round(Math.random()*1000) +90000);

                                    });

                                    $('a#comment').click(function(){
                                       
                                        $('#resultformation').html();
                                        var titre = $(this).attr("data-ref");
                                        var id=$(this).attr("data-id");
                                        var users = $(this).attr("data-formation");
                                        $.ajax({
                                            type:"GET",
                                            url:"includes/ajax_comment.php",
                                            data:'id=' + id + '&users=' + users + '&titre=' + titre,
                                            success:function(data){
                                                $("#resultformation").html(data);
                                            }
                                        });
                                    });
           
                                    $('#modif_formation').change(function(){
                                        $('#modformation').html();
                                        var id=$(this).val();
                                        $.ajax({
                                            type:"POST",
                                             url:"http://localhost/ecampus/index.php/formation/ajaxmodifierformation/"+ id,
                                            data:{'id' : id},
                                            success:function(data){
                                                $("#modformation").html(data);
                                            }
                                        });
                                    });
                                    
                                    $('#suppr_formation').change(function(){
                                        $('#supprformation').html();
                                        var id=$(this).val();
                                        $.ajax({
                                            type:"POST",
                                             url:"http://localhost/ecampus/index.php/formation/ajaxsupprimer/"+ id,
                                            data:'id=' + id,
                                            dataType: "html",
                                            success:function(data){
                                                $("#supprformation").html(data);
                                            }
                                        });
                                    });
                          


});


