<?php
if (!defined('WEB_ROOT')) {
	exit;
}

?>

<div class="content_section">
        
        	<?php 
        $categoryList    = getCategoryList_dhiru($catId);
        $numCategory     = count($categoryList);
        if($numCategory==0){
            require_once 'include/productList.php';
        }else{
        
        for ($i=0; $i < $numCategory; $i++) {
            extract ($categoryList[$i]);
        
            $children = array_merge(array($catId_dhiru), getChildCategories(NULL, $catId_dhiru));
            $children = ' (' . implode(', ', $children) . ')';

            $sql = "SELECT pd_id, pd_name, pd_price, pd_thumbnail, pd_qty, c.cat_id
                            FROM tbl_product pd, tbl_category c
                            WHERE pd.cat_id = c.cat_id AND pd.cat_id IN $children 
                            ORDER BY pd_name";
            $result     = dbQuery($sql);
            //$pagingLink = getPagingLink($sql, $productsPerPage, "c=$catId");
            $numProduct = dbNumRows($result);
            
            if ($numProduct > 0 ) {
            ?>
    
    <div class="content_section_heading"> <!-- div for one row -->
            <div class="heading"><a <?php echo "href=\"$url\""?> ><div class="half" style="float: left;text-align: left; width: 50%; height: 46px"><h2><?php echo " $name"; ?></h2></div><div class="half" style="float: right; width: 50%; text-align: right; height: 46px">View All</div></a></div>
            <div class="cleaner"></div>
            <?php
                
                while ($row = dbFetchAssoc($result)) {

                        extract($row);
                        if ($pd_thumbnail) {
                                $pd_thumbnail = WEB_ROOT . 'images/product/' . $pd_thumbnail;
                        } else {
                                $pd_thumbnail = WEB_ROOT . 'images/no-image-small.png';
                        }

            ?>
                    <div class="product_box margin_r35">
                    
                      <div class="image_wrapper"> <a <?php echo "href=\"" . $_SERVER['PHP_SELF'] . "?c=$catId_dhiru&p=$pd_id" . "\"";?>><img src="<?php echo "$pd_thumbnail";?>" alt="<?php echo "$pd_name";?>" /></a> </div>
                      <h3><?php echo "$pd_name";?></h3>  
                      <p class="price">Price:₹ <?php echo "$pd_price";?> </p>
                         <a href="#">Buy Now</a>
    
                    </div>
                <?php }} ?>                
        </div>
    <?php
        }}
        ?>
    </div> <!-- end of templatmeo_content -->