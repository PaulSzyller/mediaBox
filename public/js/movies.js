$( document ).ready(function() {
    console.log("make it here");
});

$("#modal-addmovie").on("show.bs.modal", function(e) {
    var link = $(e.relatedTarget);
    $(this).find(".modal-body").load(link.attr("data-movie"));
});

