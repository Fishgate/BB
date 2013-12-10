
//========== RESPONSIVE SLIDES
$("#slides").slidesjs({
    width: 940,
    height: 323,
    effect: {
        slide: {
            speed: 1000
        }
    },
    play: {
        auto: true
    },
    pagination:{
        active: true
    },
    navigation: {
        active: false
    }
});

//========== RESPONSIVE SELECT MENU
$('.toresponsive').ReSmenu({
    menuClass:    'responsive_menu',    // Responsive menu class
    selectId:     'resmenu',            // select ID
    textBefore:   '&Congruent;',        // Text to add before the mobile menu
    //selectOption: false,                // First select option
    activeClass:  'current-menu-item',  // Active menu li class
    maxWidth:     960                   // Size to which the menu is responsive
}); 