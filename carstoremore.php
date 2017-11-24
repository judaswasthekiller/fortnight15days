<?php
session_start();
include("header.php");
include("sidebar.php");
include("dbconnection.php");
$sql = mysql_query("select * from carstore where carid=$_GET[carid]");
$row = mysql_fetch_array($sql);
if(!isset($_SESSION[custid]))
{
	header("Location: login.php");
}

?>
		
							
		<div id="main">
	    <h3>car store</h3>

											
		<table width="538" border="1">
		  <tr>
		    <td width="268">
            <p><img src="upload/<?= $row['images']; ?>" width="208" height="130" align="left" /><br />
              <br />
            </p></td>
		    <td width="246"><p><strong>car Name:</strong> <?= $row['vehname']; ?><br />
              <strong>Model:</strong> <?= $row['model']; ?> <br />
              <strong>              Brand:</strong> <?= $row['brand']; ?><br />
              <br />
              <br />
            </p></td>
	      </tr>
		  <tr>
		    <td>Other Information</td>
		    <td><p><?= $row['description']; ?></p>
	        </td>
	      </tr>
		  <tr>
		    <td colspan="2"><strong>Estimated price: Rs.<?= $row['estprice']; ?></strong></td>
	      </tr>
		  <tr>
		    <td align="right"> <strong><?php echo "<a href='testdrive.php?caridnum=$row[carid]'>Test Drive&gt;&gt;</a> "; ?></strong></td>
		    <td align="right"><strong><?php echo"<a href='carstorebook.php?carid=$row[carid]'>Book car Now&gt;&gt;</a></strong>"; ?></strong></tr>
		  </table>
		</div>			
		
<!-- wrap ends here -->
</div>
		
<?php
include("footer.php");
?>