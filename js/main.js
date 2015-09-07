$(document).ready(function(){
    var showName = function(e){
        $(e.currentTarget).find("h1").css("display", "table-cell");
    }
    var hideName = function(e){
        $(e.currentTarget).find("h1").css("display", "none");
    }
    
    $(".artist-section").on("mouseenter", showName);
    $(".artist-section").on("mouseleave", hideName);
    $(".news-section").on("mouseenter", showName);
    $(".news-section").on("mouseleave", hideName);
});