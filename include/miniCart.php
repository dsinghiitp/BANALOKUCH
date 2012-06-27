<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$cartContent = getCartContent();

$numItem = count($cartContent);	
?>
<h3 style="color: #3e4dcd ; text-align: center; height: 24px; border-bottom: solid 1px rgba(100, 100, 100, .22)">Cart Contents</h3>
<!--<div style="background: white border-box center; margin: 25%; margin-bottom: 0; width: 50%">-->
<div style="    overflow-y: scroll; height: 222px; ">
<table width="100%" border="0" cellspacing="0" cellpadding="2" id="minicart" style="font-size: 10px; ">
 <?php
if ($numItem > 0) {

	$subTotal = 0;
	for ($i = 0; $i < $numItem; $i++) {
		extract($cartContent[$i]);
		$pd_name = "$ct_qty x $pd_name";
		$url = "index.php?c=$cat_id&p=$pd_id";
		
		$subTotal += $pd_price * $ct_qty;
?>
 <tr>
   <td><a href="<?php echo $url; ?>"><?php echo $pd_name; ?></a></td>
   
  <td width="30%" align="right"><?php echo displayAmount($ct_qty * $pd_price); ?></td>
 </tr>
<?php
	} // end while
?>
<!--  <tr><td align="right">Sub-total</td>
  <td width="30%" align="right"><?php // echo displayAmount($subTotal); ?></td>
 </tr>
  <tr><td align="right">Shipping</td>
  <td width="30%" align="right"><?php // echo displayAmount($shopConfig['shippingCost']); ?></td>
 </tr>-->
  <tr><td align="right">Total</td>
  <td width="30%" align="right"><?php echo displayAmount($subTotal /*+ $shopConfig['shippingCost']*/); ?></td>
 </tr>
  <tr><td colspan="2">&nbsp;</td></tr>
<?php	
} else {
?>
  <tr><td colspan="2" align="center" valign="middle">Shopping Cart Is Empty</td></tr>
<?php
}
?> 
</table>
</div>

<a id="viewoption2" href="#cartframe" style="text-decoration: none" >
    <h3 style="text-align: center; height: 24px; float: bottom; 
        text-decoration: none; border-top: solid 1px rgba(100, 100, 100, .22)" onmouseover="jQuery(this).css('background','#F2F4F8')"
        onmouseout="jQuery(this).css('background','initial')" > Go To Shopping Cart </h3></a>
<!--<div id="shoppingcart">future man</div>-->
