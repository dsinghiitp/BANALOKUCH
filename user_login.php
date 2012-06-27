<?php
require_once 'library/config.php';
require_once 'library/category-functions.php';
require_once 'library/product-functions.php';
require_once 'library/cart-functions.php';
require_once 'library/login-functions.php';
$errorMessage = '&nbsp;';
if (isset($_POST['txtnormalUserName'])) {
	$result = us_doLogin();	
	if ($result != '') {
		$errorMessage = $result;
	}
}
?>
<html>
<head>
<title>Shop User - Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="stylesheet/userlogin.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="1" class="graybox">
 <tr> 
  <td><img src="images/abs1.jpg" width="750" height="75"></td>
 </tr>
 <tr> 
  <td valign="top"> <table width="100%" border="0" cellspacing="0" cellpadding="20">
    <tr> 
     <td class="contentArea"> <form method="post" name="frmLoginuser" id="frmLoginuser">
       <p>&nbsp;</p>
       <table width="350" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
        <tr id="entryTableHeaderuser">
         <td>:: User Login ::</td>
        </tr>
        <tr> 
         <td class="contentArea"> 
		 <div class="errorMessage" align="center"><?php echo $errorMessage; ?></div>
		  <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
           <tr align="center"> 
            <td colspan="3">&nbsp;</td>
           </tr>
           <tr class="text"> 
            <td width="100" align="right">User Name</td>
            <td width="10" align="center">:</td>
            <td><input name="txtnormalUserName" type="text" class="box" id="txtnormalUserName" value="admin" size="30" maxlength="50"></td>
           </tr>
           <tr> 
            <td width="100" align="right">Password</td>
            <td width="10" align="center">:</td>
            <td><input name="txtnormalPassword" type="password" class="box" id="txtnormalPassword" value="admin" size="30"></td>
           </tr>
           <tr> 
            <td colspan="2">&nbsp;</td>
            <td><input name="btnnormalLogin" type="submit" class="box" id="btnnormalLogin" value="Login"></td>
           </tr>
          </table></td>
        </tr>
       </table>
       <p>&nbsp;</p>
      </form></td>
    </tr>
   </table></td>
 </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
