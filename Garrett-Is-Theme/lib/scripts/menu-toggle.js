$(document).ready(function(){
    var $button = $("#menu-toggle");
    $button.click(function(){
    $("#menu-main").toggleClass("d-n")
    $("#menu-toggle").toggleClass("toggled")
    $("#bars").toggleClass("fa-bars").toggleClass("fa-times");
    });
});