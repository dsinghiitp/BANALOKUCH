jQuery(document).ready(function(){
    
//leftNav
    $denapadaaaa_css={
//        "border": "1px dashed transparent",
	"color": "#201f1c",
        "background-color": "transparent",
	"padding-left": "20px"};
    $denapadaaaahover_css={"padding-left": "24px",
        "color": "#dd0034",
        "background-color": "whitesmoke",
//        "border":"1px dashed transparent",
	
//        "border-right": "none",
        "text-decoration": "none"};
    $tab_css={
        "border":"1px solid transparent"
    };
    $tab_hover_css={
        "-moz-border-radius": "5px",
	"-ms-border-radius": "5px",
	"-webkit-border-radius": "5px",
	"border-radius": "5px"
    }
    
    jQuery(".popout_all").hide();

    var tablist=".Books-tab , .Cars-tab , .Electronics-tab, .Manga-tab, .Kitchen-tab";
    jQuery(tablist).hover(function(){
        jQuery(".popout_all", this).css("top",jQuery(this).position().top+"px");
        jQuery(".popout_all", this).show();
        
        jQuery(".denapada", this).css($denapadaaaahover_css);
        jQuery(this).css($tab_hover_css);
        
    },function(){jQuery(".popout_all", this).hide();
        jQuery(".denapada", this).css($denapadaaaa_css);
        jQuery(this).css($tab_css);
    });
    
    
//leftNav over
    
//minicart
    jQuery("#minicart_dropdown").hide();
    jQuery("#minicart_whole").hover(function(){
        jQuery("#minicart_dropdown").show();
    },function(){
        jQuery("#minicart_dropdown").hide();
    });
    
//minicart over

    //jQuery(".heading a").hover(function(){jQuery(".half").css({"background-color": "#aff8f8"});});


//hidden_overlay
//    jQuery("#cart_button").click(function(){
//        jQuery("#hidden_overlay").show();
//   });
//        
//    
//    
    
//cartframe
    jQuery("#hidden_overlay_whole").hide();
    jQuery("#viewoption2").click(function(){
        jQuery("#hidden_overlay_whole").show();
                
    })
    
    jQuery("#blackportion").click(function(){
        
        jQuery("#hidden_overlay_whole").hide();
    })
    
    jQuery('#lgoutbox').hide();
    jQuery('body').click(function(event) {
    if (!jQuery(event.target).closest('#lgoutbox').length) {
        jQuery('#lgoutbox').slideUp();
    };
});

//    jQuery(window).scroll(function() {
//    jQuery("#hidden_overlay").css('top', jQuery(this).scrollTop() + "px");
//});
})

