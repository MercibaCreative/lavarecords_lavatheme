$(document).ready(function(){

/*
    Header Menu Highlight
*/

    var page = window.location.pathname;
    
    $('.navbar-nav a').each(function(index, el) {
        var href = $(el).attr("href")
        if (page.match(href)) {
            $(el).css("color", "rgba(255, 52, 12, 100)");
        }
    })

/*
    Artist and News Hover States
*/

    var showArtistName = function(e){
        $(e.currentTarget).find("h1").css("display", "table-cell");
    }
    var hideArtistName = function(e){
        $(e.currentTarget).find("h1").css("display", "none");
    }
    var showNewsName = function(e){
    	$(e.currentTarget).find("h1").css("display", "table-cell");
        $(e.currentTarget).find("h2").css("display", "table-cell");
        $(e.currentTarget).find("p").css("display", "table-cell");
    }
    var hideNewsName = function(e){
    	$(e.currentTarget).find("h1").css("display", "none");
        $(e.currentTarget).find("h2").css("display", "none");
        $(e.currentTarget).find("p").css("display", "none");
    }
    
    $(".artist-section").on("mouseenter", showArtistName);
    $(".artist-section").on("mouseleave", hideArtistName);
    $(".news-section").on("mouseenter", showNewsName);
    $(".news-section").on("mouseleave", hideNewsName);

/*
    Audio Player
*/

    var audioPlayer = document.getElementsByTagName("audio");
    var current = 0;
    var playing = false;
    $('#player-title').text($(audioPlayer[current]).data("title"));

    var increment = function() {
        if (playing) audioPlayer[current].pause();
        if (current+1 < audioPlayer.length) current++;
        else current = 0;
        if (playing) audioPlayer[current].play();
        $('#player-title').text($(audioPlayer[current]).data("title"));
    }
    var decrement = function() {
        if (playing) audioPlayer[current].pause();
        if (current > 0) current--;
        else current = audioPlayer.length-1;
        if (playing) audioPlayer[current].play();
        $('#player-title').text($(audioPlayer[current]).data("title"));
    }

    var playMusic = function(e) {
        audioPlayer[current].play();
        playing = true;
        $('#player-title').text($(audioPlayer[current]).data("title"));
        $(audioPlayer[current]).on('ended', increment)
        $(e.currentTarget).addClass('hidden')
        $('.pause-btn').removeClass('hidden')
    }
    var pauseMusic = function(e) {
        audioPlayer[current].pause();
        playing = false;
        $(e.currentTarget).addClass('hidden')
        $('.play-btn').removeClass('hidden')
    }

    $(".play-btn").on("click", playMusic)
    $(".pause-btn").on("click", pauseMusic)
    $(".left-arrow").on("click", decrement)
    $(".right-arrow").on("click", increment)

    // $(".play-btn").click(); // Uncomment this line to auto-play. Not recommended for usability reasons.

/*
    About Page - Google Maps Styling
*/

if (page.match("contact")) {

    var address = new google.maps.LatLng(40.765901, -73.982323);
    var mapOptions = {
      zoom: 15,
      center: address,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      styles: [{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#e9dcdc"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#f0e5e5"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ff6868"}]},{"featureType":"road.highway.controlled_access","elementType":"geometry.fill","stylers":[{"color":"#fa2525"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#d89d9d"}]},{"featureType":"poi.business","elementType":"geometry.fill","stylers":[{"color":"#f2eaea"}]},{"featureType":"poi.government","elementType":"geometry.fill","stylers":[{"color":"#e9dcdc"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"transit.line","elementType":"geometry.fill","stylers":[{"color":"#ff6868"}]},{"featureType":"transit.station","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.sports_complex","elementType":"all","stylers":[{"color":"#f2eaea"}]},{"featureType":"poi.medical","elementType":"all","stylers":[{"color":"#f2eaea"}]},{"featureType":"poi.attraction","elementType":"geometry","stylers":[{"color":"#f2eaea"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#d89d9d"}]},{"featureType":"landscape.natural","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"administrative.land_parcel","elementType":"geometry.fill","stylers":[{"color":"#eee9e9"}]},{"featureType":"poi.place_of_worship","elementType":"geometry","stylers":[{"color":"#f2eaea"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#e9dcdc"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#474747"}]}]
    }

    var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    var marker = new google.maps.Marker({
        position: address,
        map: map,
        title: 'Lava Records'
      });
}

/*

    Events page - Carousel

*/

function Carousel() {
    this.el = $('.tours-header');
    this.multiple = parseInt($('div[data-carousel-id="2"]').css("left").replace("px", ""));

    $('i[data-carousel-id]').on("click", this.clickControl.bind(this))

    return this;
}

Carousel.prototype.clickControl = function(e) {
    $('i[data-carousel-id]').addClass('fa-circle-thin');
    $(e.currentTarget).removeClass('fa-circle-thin');
    $(e.currentTarget).addClass('fa-circle');
    this.updateSlides($(e.currentTarget).data('carousel-id'))
}

Carousel.prototype.updateSlides = function(active) {

    $('.activeSlide').animate({ "left": this.multiple*-1 }, 500)
    $('.activeSlide').removeClass('activeSlide')
    $('div[data-carousel-id="'+active+'"]').addClass('activeSlide')

    if (active === 1) {
        $('div[data-carousel-id="1"]').animate({ "left": 0 }, 500)
        $('div[data-carousel-id="2"]').animate({ "left": this.multiple }, 500)
        $('div[data-carousel-id="3"]').animate({ "left": this.multiple*2 }, 500)
    }

    if (active === 2) {
        $('div[data-carousel-id="2"]').animate({ "left": 0 }, 500)
        $('div[data-carousel-id="3"]').animate({ "left": this.multiple }, 500)
        $('div[data-carousel-id="1"]').animate({ "left": this.multiple*2 }, 500)
    }

    if (active === 3) {
        $('div[data-carousel-id="3"]').animate({ "left": 0 }, 500)
        $('div[data-carousel-id="1"]').animate({ "left": this.multiple }, 500)
        $('div[data-carousel-id="2"]').animate({ "left": this.multiple*2 }, 500)
    }

}

window.carousel = new Carousel()


});