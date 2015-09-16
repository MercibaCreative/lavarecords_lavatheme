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

    var audioPlayer = document.getElementsByTagName("audio");
    var current = 0;
    $('#player-title').text($(audioPlayer[current]).data("title"));

    var increment = function() {
        if (current+1 < audioPlayer.length) current++;
        else current = 0;
        audioPlayer[current].play();
        $('#player-title').text($(audioPlayer[current]).data("title"));
    }

    var playMusic = function(e) {
        audioPlayer[current].play();
        $('#player-title').text($(audioPlayer[current]).data("title"));
        $(audioPlayer[current]).on('ended', increment)
        $(e.currentTarget).addClass('hidden')
        $('.pause-btn').removeClass('hidden')
    }
    var pauseMusic = function(e) {
        audioPlayer[current].pause();
        $(e.currentTarget).addClass('hidden')
        $('.play-btn').removeClass('hidden')
    }

    $(".play-btn").on("click", playMusic)
    $(".pause-btn").on("click", pauseMusic)
});