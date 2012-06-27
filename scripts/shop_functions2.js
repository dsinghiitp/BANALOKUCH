jQuery(document).ready(function(){
    $denapadaaaa_css={"border": "1px dashed transparent",
	"color": "#201f1c",
        "background-color": "transparent",
	"padding-left": "20px"};
    $denapadaaaahover_css={"padding-left": "24px",
        "color": "#dd0034",
        "background-color": "whitesmoke",
        "border": "1px solid orangered",
        "text-decoration": "none"};
    jQuery(".popout_all").hide();
    jQuery(".Books-tab , .Cars-tab , .Electronics-tab, .Manga-tab, .Kitchen-tab").hover(function(){
        jQuery(".popout_all", this).show();
        jQuery(".denapada", this).css($denapadaaaahover_css);
    },function(){jQuery(".popout_all", this).hide();
        jQuery(".denapada", this).css($denapadaaaa_css);});
           // jQuery("ul#popout").hide();
    
    //jQuery(".heading a").hover(function(){jQuery(".half").css({"background-color": "#aff8f8"});});

})