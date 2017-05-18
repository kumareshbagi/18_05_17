
<?php
session_start();


//$var=$_SESSION["EID"];
//echo $var;
//check if form is submitted
if (isset($_POST['submit'])) {
      include_once 'conn.php';
    $uname = mysqli_real_escape_string($conn, $_POST['name']);
    $pwd = mysqli_real_escape_string($conn, $_POST['password']);
    $result = mysqli_query($conn, "SELECT * FROM ADMIN WHERE NAME = '" . $uname. "' and PASSWORD = '" . $pwd . "'");

    if ($row = mysqli_fetch_array($result)) {
		
		$id=$row['ID'];
		$uname=$row['NAME'];
		//echo $id;
		//echo $uname;
		//echo $_SESSION["EID"];
        $_SESSION['ID'] =$id;
        $_SESSION['NAME'] = $uname;
        echo "Login Successfully";
		// $_SESSION["userid"] = $userid;
          //              if($Loginid==1)
            //            {
              //              header('Location: index.php');
                //        }
                  //      else
                    //    {
                      //      header('Location: book.php');
                        //}
		header('Location: adminlogin.php');
		
    }
	else {
        echo "Incorrect name or Password!!!";
		//header('Location: login.php');
    }
}
?>
<h2>LOGIN</h2>
        <form action="<?php $_PHP_SELF ?>" method="post"  enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputusername">NAME</label>
    <input type="name" name="name" class="form-control" id="exampleInputEmail1" placeholder="name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">PASSWORD</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="password">
  </div>
 
  <input type="submit"  value="submit" name="submit">
</form>
