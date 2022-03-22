$(document).ready(function(){
    $(".league").hover(function(){
        $(this).find("h1").css("color", "#364958");
        $(this).find("h1").css("transition", "0.7s");
        $(this).css("color", "#5a6a76");
    }, function() {
    	$(this).find("h1").css("color", "#ecedef");
    	$(this).find("h1").css("transition", "0.7s");
    });

    $(".principal-new").hover(function(){
        $('.principal-new-img').css('transform', 'scale(1.1)');
        $('.principal-new-img').css('transition', '0.7s');
        $('.principal-new-img').css('opacity', '0.7');
        $(this).css('border', '3px solid #bbcbcb');	
    }, function() {
    	$('.principal-new-img').css('transform', 'scale(1)');
        $('.principal-new-img').css('transition', '0.7s');
        $('.principal-new-img').css('opacity', '1');
        $(this).css('border', '3px solid #242f40');
    });



    $(".side-new").hover(function(){
        $(this).find('.side-new-img').css('transform', 'scale(1.1)');
        $(this).find('.side-new-img').css('transition', '0.7s');
        $(this).find('.side-new-img').css('opacity', '0.7');
        $(this).css('border', '3px solid #bbcbcb');	
    }, function() {
    	$(this).find('.side-new-img').css('transform', 'scale(1)');
        $(this).find('.side-new-img').css('transition', '0.7s');
        $(this).find('.side-new-img').css('opacity', '1');
        $(this).css('border', '3px solid #242f40');
    });

    $("#toggle").click(function() {
        $('.leagues').toggleClass('show');
    })





    // active toggle 
    var path = window.location.pathname.split("/").pop();

    if(path == '') {
        path = 'index.php';
    } 

    if((path != 'match-schedule.php') && (path != 'dmca.php') && (path != 'index.php')  && (path != 'contact-us.php') ) {
        path = 'index.php';
    } 


    var target = $('.navbar-default .navbar-nav > li > a[href="'+ path + '"]');
    target.addClass('active');

     

    //Check to see if the window is top if not then display button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 300) {
            $('.arrow').fadeIn();
        } else {
            $('.arrow').fadeOut();
        }
    });
    
    //Click event to scroll to top
    $('.arrow').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });


    /*$('.comming-up-match').hover(function() {
        $(this).find('p').css('transform', 'scale(1.3)');
        $(this).find('p').css('transition', '0.7s');
        $(this).find('p').css('color', 'red');
    }, function() {
        $("p").css('transform', 'scale(1)');
        $(this).find('p').css('color', '#000');
    })*/

});