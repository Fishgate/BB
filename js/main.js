
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

//========== FORM STUFF
if($(".formholder").length > 0){
    $('#datetimepicker').datetimepicker({
	timepicker:false,
	format:'d/m/Y'
    });
    
    $("#cell").bind("keydown", disable_alpha_chars);
    
    $("input, textarea").bind({
        focus: function() {
            $(this).removeAttr("style"); //resets the inline styling caused by an error in the input

            if($(this).is("input")){
                if($(this).data("placeholder") === $(this).val()){
                    $(this).val("");
                }
            }else if($(this).is("textarea")){
                if($(this).data("placeholder") === $(this).html()){
                    $(this).html("");
                }
            }
        },
        blur: function() {
            if($(this).is("input")){
                if($(this).val().trim() === ""){
                    $(this).val($(this).data("placeholder"));
                }
            }else if($(this).is("textarea")){
                if($(this).html().trim() === ""){
                    $(this).html($(this).data("placeholder"));
                }
            }
        }
    });
    
    $("#submit_btn").click(function(e){        
        valName =       validate("#name");
        valEmail =      validate_email("#email");
        valCell =       validate("#cell");
        valBday =       validate("#datetimepicker");
        valFlavour =    validate("#flavour");
        valWhere =      validate("#where");
        valFeature =    validate("#feature");
        valTrick =      validate_trick("#trick");
        
        if(!valName || !valEmail || !valCell || !valBday || !valFlavour || !valWhere || !valFeature || !valTrick){
            alert('Please fill in the required fields.');
        }else{
            $.ajax({
                url: 'includes/validation.php',
                type: 'post',
                data: $('#form').serialize(),
                success: function(result){
                    var res = result.trim();
                    
                    /*
                    if(res == 'success'){
                        window.location = 'thank-you.php';
                    }else{
                        alert(res);
                    }
                    */
                    console.log(res);
                },  
                error: function () {
                    alert('There was an error submitting your request.');
                }
           });
       }
       
       e.preventDefault();
    });
    
}