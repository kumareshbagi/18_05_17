<!DOCTYPE html>
<html>

	<title>TICKET</title>
	<body>
	<h1> TICKET</h1>
	<?php 
	// Start the session
   session_start();
	include_once('conn.php');//connect to config file
		$var=$_SESSION["EID"];
         //echo $var;
		//$eventid=$_SESSION['EID'];
	 $userid=$_SESSION["ID"] ;
	
		//echo $userid;
		//echo $eventid;
		
	$sql1 = "SELECT * FROM EVENTS WHERE EID = '$var' ";
      $result = $conn->query($sql1);
       while($array=mysqli_fetch_array($result))
         {
			 $title=$array['ENAME'];
				$organiser=$array['EORGANIZER'];
				$detail=$array['EDESCRIPTION'];
				$venue=$array['EVENUE'];
				$startdate=$array['ESTARTDATE'];
				$enddate=$array['EENDDATE'];
				$websiteurl=$array['EURL'];
				$price=$array['ETICKETPRICE'];
				$mobile1=$array['CONTACTNUMBER'];
				$seat=$array['NOOFSEATS'];
				 $banner=$array['EVENTBANNER'];
				$terms=$array['TERMSANDCONDITIONS'];
			
		 }
	$sql2 = "SELECT * FROM MEMBERS WHERE ID = '$userid' ";
      $result2 = $conn->query($sql2);
       while($array2=mysqli_fetch_array($result2))
         {
			 $uname=$array2['USERNAME'];
				$lname=$array2['LASTNAME'];
				$email=$array2['EMAIL'];
				$num=$array2['PHONENUMBER'];
				$address=$array2['ADDRESS'];
		 }
		$sql3 = "SELECT * FROM BOOKING WHERE ID = '$userid' ";
      $result3 = $conn->query($sql3);
       while($array3=mysqli_fetch_array($result3))
         {
			 $ID=$array3['ID'];
				$eid=$array3['EID'];
				$no=$array3['NOOFTICKETS'];
				$pr=$array3['PRICE'];
		 }
		
		//echo "EVENT BANNER:";
		//echo $banner;
	?>
	
	<div class="left">	
   <form action="" method="post"  enctype="multipart/form-data">
        <table border="1" width="500" height="20%" align="left" class="demo-table">
         <tr>
            <td>Hello </td>
            <td><?php echo $uname; ?></td>
        </tr>
			<tr>
            <td>EVENT NAME: </td>
            <td><?php echo $title; ?></td>
          </tr>
			<tr>
            <td>EVENT DATE: </td>
            <td><?php echo $startdate; ?></td>
          </tr>
   <tr>
        <td>EVENT DESCRIPTION: </td>
        <td><?php echo $detail; ?></td>
        </tr>
			<tr>
        <td>EVENT VENUE: </td>
        <td><?php echo $venue; ?></td>
        </tr>
           
			<tr>
        <td> NO OF SEATS: </td>
        <td><?php echo $no; ?></td>
        </tr>
       <tr>
        <td>TICKET PRICE: </td>
        <td><?php echo $pr; ?></td>
        </tr>
            
				<tr>
        <td>ADDRESS: </td>
        <td><?php echo $address; ?></td>
        </tr>  
     <tr>
        <td>CONTACT NUMBER: </td>
        <td><?php echo $mobile1; ?></td>
        </tr>
         
            </table>
</form></div>
		
			<img height="350" width="350"src="<?php echo $banner;?>">
		
		<h2>Shipping Address:</h2>
		<p>Name:<?php echo $uname; ?></p>
		<p>Phone:<?php echo $num; ?></p>
		<p>Email:<?php echo $email; ?></p>
		<p>Address:<?php echo $address; ?></p>
		
		<p>Scan to get details</p>
		<br/>
		<img src="http://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=<?php echo "Name: ".$uname." Email: ".$email;?>&choe=UTF-8" />
		
</body>
</html>