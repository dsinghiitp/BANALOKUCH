<?php
if (!defined('WEB_ROOT')) {
	exit;
}
?>
<div id="sidebar2">
    <div class="sidebar_section">
<?php
$categoryList    = getCategoryList_dhiru($catId/*obtained from index.php*/);
                        foreach ($categoryList as $category) {
                        extract($category);
                        ?>
                        <a class="denapada3" <?php echo "href=\"$url\""?>><?php echo " $name"; ?></a>
                        <?php
                        }

                        ?>
    </div>
</div>
