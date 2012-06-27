<?php
if (!defined('WEB_ROOT')) {
	exit;
}
$categoryList    = getCategoryList_dhiru($catId/*obtained from index.php*/);
                        foreach ($categoryList as $category) {
                        extract($category);
                        }
?>
