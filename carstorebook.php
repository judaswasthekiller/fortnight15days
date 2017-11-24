<?php
include("header.php");
include("sidebar.php");
include("dbconnection.php");
$dt1 = date("Y");
$dt2 = date("m");

$sql = mysql_query("select * from carstore where carid=$_GET[carid]");
$row = mysql_fetch_array($sql);
?>
							
		<div id="main">
	    <h3>car store</h3>

		<form name="form1" method="post" action="carstorebookpaid.php">	
        <input type="hidden" name="carid" value="<?= $row['carid']; ?>" />       	<input type="hidden" name="vehprice" value="<?= $row['estprice']; ?>" />   			
		<table width="538" border="1">
		  <tr>
		    <td width="268" colspan="2">
            <p><img src="upload/<?= $row['images']; ?>" width="208" height="130" align="left" /><br />
              <br />
            </p></td>
		    <td width="246"><p><strong>car Name:</strong> <?= $row['vehname']; ?><br />
              <strong>Model:</strong> <?= $row['model']; ?> <br />
              <strong>              Brand:</strong>  <?= $row['brand']; ?><br />
              <br />
              <br />
            </p></td>
	      </tr>
		  <tr>
		    <td height="47" colspan="2">Other Information</td>
		    <td><p><?= $row['description']; ?></p></td>
	      </tr>
		  <tr>
		    <td colspan="3"><strong>Estimated price: Rs.<?= $row['estprice']; ?></strong></td>
	      </tr>
		  <tr>
		    <td><strong>Comments</strong></td>
		    <td colspan="2"><label for="comments"></label>
	        <textarea name="comments" id="comments" cols="45" rows="5"></textarea></td>
	      </tr>
		  <tr>
		    <td colspan="2">&nbsp;</td>
		    <td><strong><input type="submit" name="submit" value="Submit" /><?php // echo"<a href='carstorebookpaid1.php?caridnum=$_GET[carid]'>Pay now&gt;&gt;</a></strong></td>"; ?>
          </strong></td>  </tr>
		  </table>
          </form>
		</div>			
		
<!-- wrap ends here -->
</div>
		
<?php
include("footer.php");
?>