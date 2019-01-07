// JQuery framework'as
// greitai sudedame veiksmus visiems elementams
$(function () {
    $('.popupBg').hide(); // kažką paslepia
    $('.mobileMenu').hide();

    $('.sandwich').clock(function () {
        console.log('bla bla bla');
        $('.mobileMenu').fadeToggle(); // jei rodoma - paslepia, jei paslėptas - parodo, pakeičia hide/shoe funkcijas
    });

    $('button').dubleclick(function () {
        $('.popupBg').fadeToggle(); // veikia su visais .popupBg elementais
        $(this).fadeToggle(); // pasiekiame būtent tas button kurį paspaudžiame
        $(this).addClass('active').animate({
            opacity: 0.1,
            height: 100
        }); // atliekame du veiksmus vienas paskui kitą, glim Ršyti be galo dauk veiksmų jeigu jie grąžiną objektą
    });
});








