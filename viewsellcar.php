<?php
include("header.php");
include("sidebar.php");
include("dbconnection.php");
if(isset($_GET['delid']))
{
$result = mysql_query("delete from car where sellno = '$_GET[delid]'");
}
$result= mysql_query("select * from car");
?>
		
							
		<div id="main">				
			
			<a name="TemplateInfo"></a>
			<h1>Sell car</h1>
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
		  <table width="514" border="1">
		    <tr>
		      <th width="33" height="42" scope="col">SL <br />
	          No.</th>
		      <th width="102" scope="col">Image</th>
              <th width="208" scope="col">car info</th>
	
		<th width="55" scope="col">Other<br />
        Info</th>
		      <th width="82" scope="col">car <br />
	          status</th>
              <th width="120" scope="col">Actions</th>
	        </tr>
             <?php
			 $i=1;
		  while($arrrec= mysql_fetch_array($result))
		    { 

		  echo "  <tr>
		      <td scope='col'>&nbsp;$i</td>
		      <td scope='col'> <img src='upload/$arrrec[images]' height='75' width='100' > </td>
		      <td scope='col'><b>car Name:</b> $arrrec[vehname]<br />
              				<b>car model:</b> $arrrec[model]<br />
                           <b> Brand:</b> $arrrec[brand]<br />
							<b>Estimated price:</b> $arrrec[estmdprice]<br />
                            </td>
		      <td scope='col'><a href='viewsellcarmore.php?carid=$arrrec[sellno]'>More</a></td>
		      <td scope='col'>&nbsp;$arrrec[status]</td>
			  <td scope='col'>"; 
			  
			  if($arrrec[status] == 'Pending') 
			  { 
			  ?> 
			  <?php echo "<a href='sellcar.php?updtid=$arrrec[sellno]'>Update</a>|<a href='viewsellcar.php?delid=$arrrec[sellno]'>Delete</a>";
			   } 
			   else if($arrrec[status] == 'Accepted') 
			    { 
				?> 
				<?php echo "Purchased</td>"; 
				} 
				else
				{
					echo "Rejected";
				}
				?>
                
	        <?php "</tr>";
$i++;
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