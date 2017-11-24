<?php
include("header.php");
include("sidebar.php");

include("dbconnection.php");
if(isset($_GET['carid']))
{
$results = mysql_query("DELETE from carstore where carid ='$_GET[carid]'");
}

?>
		
							
		<div id="main">				
			
			<a name="TemplateInfo"></a>
			<h1>car Store</h1>
            <?php
if($ctins == 1)
{
	echo "<center><b>Employees account created successfully...</b></center><br>";
	echo "<center><b><a href='emplogin.php'>Click here to Login.</a></b></center>";
}
else
{
	?>
		<form id="form1" name="form1" method="post" action="">
		  <table width="795" border="1">
		    <tr>
		      <th width="90" scope="col">car<br />
	          ID</th>
		      <th width="161" scope="col">Employee<br />
	          Name</th>
		      <th width="250" scope="col">car details</th>
		      <th width="95" scope="col">Estimated<br />
	          price</th>
		    
		      <th width="69" scope="col">Status</th>
              <th width="90" scope="col" colspan="3">Actions</th>
	        </tr>
          <?php
$result= mysql_query("select * from carstore");
		  while($arrrec= mysql_fetch_array($result))
		  {  
		  $result1= mysql_query("select * from employee where employeeid='$arrrec[empid]'");
		 $arrrec1 = mysql_fetch_array($result1);
		   echo" <tr>
		      <td>&nbsp; $arrrec[carid]</td>
		      <td>&nbsp; <strong>Employee ID:</strong>  $arrrec1[employeeid]<br>
			  			 <strong>Employee Name: <br></strong> $arrrec1[fname] $arrrec1[lname]<br>
			  </td>
		      <td><img src='upload/$arrrec[images]' width='50' height='50' align='left'></img><b><font color='green'>$arrrec[vehname]</font></b> <br>
			  &nbsp; car model: $arrrec[model]
			  &nbsp; car brand: $arrrec[brand]</td>
			  <td>&nbsp; $arrrec[estprice]</td>
			  <td>&nbsp; $arrrec[status]</td>
			  <td><a href='viewcarstoremore.php?carid=$arrrec[carid]'>More</a></td><td><a href='addcarstore.php?carid=$arrrec[carid]'>Edit</a></td><td><a href='viewcarstore.php?carid=$arrrec[carid]'>Delete</a></td>
	        </tr>";
		  }
	      ?>
          </table>
		</form>
   	<?php
	}
	?>
			<p>&nbsp;</p>
<br />					
											
		</div>			
		
<!-- wrap ends here -->
</div>
		
<?php
include("footer.php");
?>