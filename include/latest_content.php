<?php
if (!defined('WEB_ROOT')) {
	exit;
}
?>
<div id="latest_product_gallery">
        	<h2>Popular products</h2>
	    	<div id="SlideItMoo_outer">	
                <div id="SlideItMoo_inner">			
                    <div id="SlideItMoo_items">
                        <?php
                        $featured_items= array(32,33,29,22,36,24,25,34);
                        foreach($featured_items as $item)
                        {
                        ?>
                        <div class="SlideItMoo_element">
                            <?php
                            $q=  dbFetchAssoc(dbQuery("SELECT pd_thumbnail, cat_id FROM tbl_product WHERE pd_id = $item"));
                            extract($q);
                            ?>
                                <a <?php echo "href=\"" . $_SERVER['PHP_SELF'] . "?c=$cat_id&p=$item" . "\"";?>>
                                <img src="<?php echo WEB_ROOT ."images/product/" . $pd_thumbnail;?>"/></a>
                           
                        </div>
                        <?php
                        }
                        ?>
                      
                    </div>			
                </div>
            </div>
        
    	</div> <!-- end of latest_content_gallery -->
<div class="cleaner"></div>