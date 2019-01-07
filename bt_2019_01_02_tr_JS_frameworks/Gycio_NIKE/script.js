$(function() {
    $('.popupBg').hide();
    $('.mobileMenu').hide();
    
    $('.sandwich').click(function() {
        console.log('Sandwich paspaustas');
        $('.mobileMenu').fadeToggle();
    });
    
    $('button').dblclick(function() {
        // Hello
        /* 
        w
        o
        r
        l
        d
        */
        $('.popupBg').fadeToggle();
        
        $('button').removeClass('active');
        $(this).addClass('active').animate({
            height: 100
        });
    });
});








