//JS du menue déroulant

$('div.allDiv').hide(); //On cache une toutes les div avant la sélection d'une formation

$("select[name='session']").change(function(){ //On effectue un changement en fonction du select
    let id = "div_"+$(this).val(); //On créer une variable id qui recuperera la valeur
    $('div.allDiv').hide();
    $('div.divOriginal').hide();//On recache encore une fois toutes les div non concerne
    $('#'+id).show();//On affiche la div correspondante
 });