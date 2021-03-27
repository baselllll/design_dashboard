// MDB Lightbox Init
$(function () {
    $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
    $('html').niceScroll({
        cursorcolor:'#000',
        cursorwidth:4,
        cursorborder:'1px solid #000'
    });
    $(window).scroll(function(){
        if ($(this).scrollTop() >= 700){

        $('#scroll-top').show();
        
        }
        else{
            $('#scroll-top').hide()
        }
    });
    $('#scroll-top').click(function(){
        $('html , body').animate({
            scrollTop:0
        },600);
    });

    });