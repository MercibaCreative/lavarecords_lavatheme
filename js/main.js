$(document).ready(function(){
    var showArtistName = function(e){
        $(e.currentTarget).find("h1").css("display", "table-cell");
    }
    var hideArtistName = function(e){
        $(e.currentTarget).find("h1").css("display", "none");
    }
    var showNewsName = function(e){
    	$(e.currentTarget).find("h1").css("display", "table-cell");
        $(e.currentTarget).find("h2").css("display", "table-cell");
    }
    var hideNewsName = function(e){
    	$(e.currentTarget).find("h1").css("display", "none");
        $(e.currentTarget).find("h2").css("display", "none");
    }
    
    $(".artist-section").on("mouseenter", showArtistName);
    $(".artist-section").on("mouseleave", hideArtistName);
    $(".news-section").on("mouseenter", showNewsName);
    $(".news-section").on("mouseleave", hideNewsName);
});