<?php
include("header.php");
include("sidebar.php");
include("dbconnection.php");
?>
<?php
$sql = mysql_query("select * from  carstore where carid='$_GET[carid]'");
$row = mysql_fetch_array($sql);
?>
		
							
		<div id="main">				
			
			<a name="TemplateInfo"></a>
			<h1>View More</h1>
		<form action="viewcarstore.php" method="post" name="form1" id="form1">		
			<table width="500", border="0">
			    <th width="169" height="33" scope="row">Employee Name</th>
			    <td width="140">
			      <label for="fname"></label>
			      <label for="custname"></label>
			      <label for="sparename"></label>
			      <label for="vehname2"></label>
			      <label for="empname"></label>
                  <?php
				  $result = mysql_query("select fname from employee where employeeid='$row[empid]'");
				  $res = mysql_fetch_array($result);
				  ?>
		       <?php echo $res['fname']; ?></td>
		      </tr> 
			  <tr>
			    <th height="33" scope="row">car Name
                  <label for="lname"></label></th>
			    <td><label for="vehname"></label>
			      <label for="sparetype"></label>
			      <label for="vehname3"></label>
		        <?php echo $row['vehname']; ?></td>
		      </tr>
			  <tr>
			    <th height="28" scope="row">Model</th>
			    <td><p>
			      <label for="email"></label>
			      <label for="model"></label>
			      <label for="carno"></label>
			      <label for="spareno"></label>
			      <label for="sparename2"></label>
			      <label for="model2"></label>
		          <?php echo $row['model']; ?>
	            </td>
		      </tr>
			  <tr>
			    <th height="31" scope="row">Brand</th>
			    <td><label for="password"></label>
			      <label for="date"></label>
			      <label for="description"></label>
			      <label for="brand"></label>
		         <?php echo $row['brand']; ?></td>
		      </tr>
			  <tr>
			    <th height="36" scope="row">Image</th>
			    <td><label for="confpass"></label>
			      <label for="images"></label>
			      <label for="address"></label>
			      <label for="image"></label>
			      <label for="images2"></label>
			      <label for="images3"></label>
			      <label for="file"></label>
			       <img src="upload/<?php echo $row['images']; ?>" width="150" height="150" />
		      </tr>
			  <tr>
			    <th height="33" scope="row">Estimated Price</th>
			    <td><label for="estprice"></label>
		         <?php echo $row['estprice']; ?></td>
		      </tr>
               <tr>
			    <th height="33" scope="row">Description</th>
			    <td><label for="estprice"></label>
		         <?php echo $row['description']; ?></td>
		      </tr>
               <tr>
			    <th height="33" scope="row">Status</th>
			    <td><label for="estprice"></label>
		         <?php echo $row['status']; ?></td>
		      </tr>
			  <tr>
			    <th scope="row">&nbsp;</th>
			    <td><input type="submit" name="submit" id="submit" value="Back" /></td>
		      </tr>
          </table>
</form>
			<p>&nbsp;</p>
<br />					
											
		</div>			
		
<!-- wrap ends here -->
</div>
		
<?php
include("footer.php");
?>