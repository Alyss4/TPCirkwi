$(document).ready(function(){
    $("#boutonAccordeon").click(function(){
        var $contenu = $(".container-area");
        $contenu.slideToggle();
    })
})