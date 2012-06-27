<?php
require_once 'library/config.php';
require_once 'library/category-functions.php';
require_once 'library/product-functions.php';
require_once 'library/cart-functions.php';

$_SESSION['shop_return_url'] = $_SERVER['REQUEST_URI'];
if (isset($_GET['logout'])) {
		us_doLogout();
	}

$catId  = (isset($_GET['c']) && $_GET['c'] != '1') ? $_GET['c'] : 0;  /*corresponds to the category id shown by the current page link */
$pdId   = (isset($_GET['p']) && $_GET['p'] != '') ? $_GET['p'] : 0;

require_once 'include/header.php';

?>
<body <?php if($pdId) echo "style=\"background: white url(images/templatemo_body_checkout.png) repeat-x top;\"";?>>
<div id="hidden_overlay_whole"><div id ="blackportion"></div><div id="cartframe"><?php include 'cart.php'?></div></div>


<div id="templatemo_wrapper">
	
    <?php require_once 'include/top.php'; ?>
    <?php require_once 'include/discount.php'; ?>
    
    
    	
        <?php
            if ($pdId) {
                ?>
                <div id="templatmeo_content" >
                <?php 
                    require_once 'include/productDetail.php';
            } /* else if ($catId) {
                    require_once 'include/productList.php';
            }*/else {
                if($catId)
                {require_once 'include/leftNavv.php';}
                ?>
                <div id="templatmeo_content" style="float: right">
                <?php    require_once 'include/latest_content.php';
                    require_once 'include/categoryLists_dhiru.php';
                    
            }
            

        ?> 
        
    
    
</div> <!-- end of templatemo_content -->
</div> <!-- end of templatemo_wrapper -->
<?php
require_once 'include/footer.php';
?>

