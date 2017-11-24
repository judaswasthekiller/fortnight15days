<?php
session_start();
?>
<div id="sidebar" >

			<h1>Sidebar Menu</h1>
			<div class="left-box">
				<ul class="sidemenu">
                    <?php
				if(isset($_SESSION[custid]))
				{
					?>
					<li><a href="account.php">Account</a></li>
                    <li><a href="sellcar.php">Sell Your Car</a></li>
                    <li><a href="viewsellcar.php">Car Sell Request</a></li>
                    <li><a href="service.php">Service My Car </a></li>
                     <li><a href="viewcarservicerequest.php">Car Service Request</a></li>
                    <li><a href="viewtestdrive.php">View Test Drive Request</a></li>
                      <li><a href="viewbuycars.php">View Purchased Cars</a></li>
                      <li><a href="viewbuyspareparts.php">View Purchased Spare parts</a></li>
                      
                       <li><a href="logout.php">Logout</a></li>
					<?php
				}
				else if(isset($_SESSION[empid]))
				{
					?>
					<li><a href="empaccount.php">Employee Account</a></li>
                    <li><a href="viewemployees.php">View Employees</a></li>
                    <li><a href="viewcustomers.php">View Customers</a></li>
                    <li><a href="viewservice.php">car Service Request</a></li>
                    <li><a href="viewcustomersellcar.php">Used Cars</a></li>
                    <li><a href="viewcarstore.php">car Store</a></li>
                    <li><a href="viewbuycars.php">Purchased Cars</a></li>
                    <li><a href="viewtestdrive.php">Test Drive</a></li>
                    <li><a href="viewspareparts.php">Spare Parts</a></li>
                    <li><a href="viewbuyspareparts.php">Spare Parts Order</a></li>
                    <li><a href="logout.php">Logout</a></li>
					<?php
				}

				else
				{
					?>
                    <li><a href="index.php">Home</a></li>
					<li><a href="login.php">CustomerLogin</a></li>
					<li><a href="registration.php">CustomerRegistration</a></li>
					<li><a href="emplogin.php">EmployeeLogin</a></li>

					<li><a href="employees.php">EmployeeRegistration</a></li>
					<?php
				}
				?>

				</ul>
			</div>
</div>
