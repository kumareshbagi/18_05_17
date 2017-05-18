<!DOCTYPE html>
<html>

	<title>Book</title>
	<body>
	<h1>BOOK TICKET</h1>
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
	?>
	
  <div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
		<form method="post" action="">
		
		<div class="row margin">
          <div class="input-field col s6">
			  Enter Number Of Tickets:<select name="seat" >  

    <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
     <option value="5">5</option>
</select><input type="submit" name="submit" value="Submit" />
            <!--<input id="ticket" type="number" name="ticket"/>
            <label for="ticket" class="center-align">Number Of Tickets:</label> -->
          </div>
        </div>
		
        <br />
            
		  </form>
	</div>
 </div>
	
	<?php 
	echo "Summary:";
	echo "<br />";
		include_once('conn.php');
	if (isset($_POST['submit'])) {
	$tnum=$_POST['seat'];
	$Total = $price * $tnum;
	$sql = mysqli_query($conn,"INSERT INTO BOOKING (ID,EID,NOOFTICKETS,PRICE) VALUES ($userid,$var,$tnum,$Total)");
$sql = mysqli_query($conn,"UPDATE EVENTS SET NOOFSEATS=NOOFSEATS-$tnum WHERE EID=$var");
		echo "Hey congratulations!<br />";
		 echo $uname;
		echo "<br />";
	echo "Yor tickets are reserved.Thank you for Booking!<br />";
	echo "Total Price is: ";
	echo $Total;
		}
	
	?>
		<br>
		<br>
		<br>
		<br>
		<a href="logout.php">logout</a>
</body>
</html>