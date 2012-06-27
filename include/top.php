<?php
if (!defined('WEB_ROOT')) {
	exit;
}
?>
    
<script> 
    var nothome=0; 
    <?php  if($catId || $pdId){?>
    nothome=1; 
<?php  }?>
    var scrolled=0;
    jQuery(window).scroll(function() {
    if(scrolled==0 && jQuery(this).scrollTop()>80)
    {
        
    scrolled=1;
    jQuery("mincart_dropdown").css('top','0px');
    jQuery("#topbarfancy").css({"margin-top": "0px","position":"fixed","z-index":"10"});
    jQuery("#sidebar").css('display','none');
    }
    if(scrolled==1 && jQuery(this).scrollTop()<80)
        {
            scrolled=0;
            jQuery("mincart_dropdown").css('top','30px');
            jQuery("#topbarfancy").css({"margin-top": "80px","position":"initial","z-index":"0"});
            if(nothome==0){
            jQuery("#sidebar").css('display','block');
        }}
    
    });
    
function showleftbar(){
    jQuery('#sidebar').css('display', 'block');
}
function hideleftbar(){
    jQuery('#sidebar').css('display', 'none');
}

</script>
   
    <div id="templatemo_header_bar">
            
            <div id="header"><div class="right"></div>
            
                <h1><a href="<?php echo $_SERVER['PHP_SELF'];?>">
                        <img src="images/templatemo_logo.png" alt="Site Title" height="42px"/>
                    <span>Shops at your doorstep</span>
                </a></h1>
            </div>
        
             <div id="login_box" >
                 
                 <?php
                 if (!isset($_SESSION['normal_user_id']))
                 {  $_SESSION['normal_login_return_url'] = $_SERVER['REQUEST_URI'];
                     ?>
                 <div class="buttons">
                 <a href="../user_login.php" class="button">Login</a>
                 </div> <!-- div end of buttons-->
                 <?php }
                 else{
                     ?>
                 <div id="lgoutbox" style="border-color: #999;-moz-box-shadow: 0 2px 0 rgba(0, 0, 0, 0.2) ;
                    -webkit-box-shadow:0 2px 5px rgba(0, 0, 0, 0.2);
                    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15);height: 45px;width: 224px;
                    position: absolute; background: white;
                    top:50px">
                     <a href="<?php echo $_SESSION['shop_return_url']; ?>?logout" class="button" style="float: right;">Logout</a>
                     </div>
                 <div class="buttons" style="float: right;">
                     <a href="#lgoutbox" class="button close"> <?php echo $_SESSION['normal_user_id'];?></a>
                </div> <!-- div end of buttons-->
                
                     <?php
                     }?>
<!--                <form action="#" method="get">
                    <input type="text" value="username" name="q" size="10" id="loginfield" title="loginfield" onfocus="clearText(this)" onblur="clearText(this)" />
                    <input type="password" value="password" name="q" size="10" id="loginfield" title="loginfield" onfocus="clearText(this)" onblur="clearText(this)" />
                </form>-->
                
            </div>
        <div id="topbarfancy">
            <div id="sidebarplusallcat" style="position: absolute;" onmouseover="if(scrolled==1 || nothome==1){jQuery(showleftbar)}"
            onmouseout="if(scrolled==1|| nothome==1){jQuery(hideleftbar)}">
                <div id="allcat" onmouseover="jQuery(this).css('background', 'black')" 
                     onmouseout="jQuery(this).css('background', 'transparent')">ALL CATEGORIES</div>
            <div id="sidebar" style="display: <?php if($catId || $pdId) echo "none"; else echo "block"; ?>;
            top: <?php if($catId || $pdId) echo "30px"; else "0px"; ?>">

            <div class="sidebar_section">
                <?php 
                $badeboodes    = getCategoryList_dhiru(0);
                foreach ($badeboodes as $badeboode) {
                extract($badeboode);
                ?>

                <div class="<?php echo " $name"."-tab"; ?>">
                    <a class="denapada" href="<?php echo $url; ?>"><?php echo " $name"; ?></a>
                    <div class="popout_all">
                        
                        <?php 
                        $categoryList    = getCategoryList_dhiru($catId_dhiru);
                        foreach ($categoryList as $category) {
                        extract($category);
                        ?>
                        <a class="denapada2" <?php echo "href=\"$url\""?>><?php echo " $name"; ?></a>
                        <?php
                        }

                        ?>
                        
                </div>
                </div>
                <?php
                }

                ?>
            </div>


            </div> <!-- end of sidebar  -->
        </div> <!--end of sidebarplusallcat-->
            <div id="search_box">
                <form action="#" method="get">
                    <input type="text" value="Enter keyword here..." name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                    <input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" />
                </form>
            </div>
        <div id="minicart_whole"><div id="cart_button" onmouseover="jQuery(this).css('background', 'black')" 
                                      onmouseout="jQuery(this).css('background', 'transparent')">SHOW CART</div>
            
        <div id="minicart_dropdown"><?php require_once 'include/miniCart.php' ?></div>
        </div>
        </div>
    </div> <!-- end of templatemo_header_bar -->
    
    <div class="cleaner"></div>