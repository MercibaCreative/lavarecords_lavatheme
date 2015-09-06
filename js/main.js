$(document).ready(function(){
    var showArtistName = function(e){
        $(e.currentTarget).find("h1").css("display", "table-cell");
    }
    var hideArtistName = function(e){
        $(e.currentTarget).find("h1").css("display", "none");
    }
    
    $(".artist-section").on("mouseenter", showArtistName);
    $(".artist-section").on("mouseleave", hideArtistName);
});