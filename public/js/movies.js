$( document ).ready(function() {
    console.log("make it here");
});

$("#modal-addmovie").on("show.bs.modal", function(e) {
    var link = $(e.relatedTarget);
    $(this).find("#modal-movie-title").text((link.attr("data-movie-title")));
    $(this).find("#modal-movie-overview").text((link.attr("data-movie-overview")));
    $(this).find("#modal-movie-release-date").text((link.attr("data-movie-release-date")));
    $(this).find("#modal-movie-poster-path").attr("src", "http://image.tmdb.org/t/p/w1920" + (link.attr("data-movie-poster-path")));
    $(this).find("#add-movie-button").val((link.attr("data-movie-id")));
});


function changeStarColor() {

    $('.fa-star-o').click( function() {
        $(this).addClass('fa-star').removeClass('fa-star-o');
    } );

}
