<?php
ob_start();
include("header.php");
include("sidebar.php");

if(isset($_SESSION[custid]))
{
	header("Location: account.php");
}
else
{
?>


		<div id="main">
	    <h3>Car-Solution - The Complete One Stop Shop</h3>
	    <table width="472" border="0">
		  <tr>
		    <td colspan="2"><p>Thanks to Spidy, John and Lisa for building this website</p>
	        <p>&nbsp;</p></td>
	      </tr>
		  <tr>
		    <td width="236"><a href="login.php"><img src="images/customer.jpg" width="169" height="169" /></a></td>
		    <td width="236"><a href="emplogin.php"><img src="images/admin.jpg" width="169" height="169" /></a></td>
	      </tr>
		  </table>
		</div>

<!-- wrap ends here -->
</div>
<?php
}

include("footer.php");
?>
