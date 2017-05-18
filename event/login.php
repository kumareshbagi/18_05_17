<?php
session_start();


$var=$_SESSION["EID"];
//echo $var;
//check if form is submitted
if (isset($_POST['login'])) {
      include_once 'conn.php';
    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    $result = mysqli_query($conn, "SELECT * FROM MEMBERS WHERE USERNAME = '" . $uname. "' and PASSWORD = '" . $pwd . "'");

    if ($row = mysqli_fetch_array($result)) {
		
		$id=$row['ID'];
		$uname=$row['USERNAME'];
		//echo $id;
		//echo $uname;
		//echo $_SESSION["EID"];
        $_SESSION['ID'] =$id;
        $_SESSION['USERNAME'] = $uname;
        $successmsg = "Login Successfully";
		// $_SESSION["userid"] = $userid;
          //              if($Loginid==1)
            //            {
              //              header('Location: index.php');
                //        }
                  //      else
                    //    {
                      //      header('Location: book.php');
                        //}
		header('Location: book.php');
		
    }
	else {
        $errormsg = "Incorrect name or Password!!!";
		//header('Location: login.php');
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css" />
</head>
<body>


<div class="container-fluid">
       
<div class="container">
			<div class="row">
						<div class="col-md-4 col-md-offset-4 well">
									<form role="form" action="<?php $_PHP_SELF ?>" method="post" name="loginform">
												<fieldset>
															<legend>Login</legend>

															<div class="form-group">
																<label for="name">USERNAME</label>
																<input type="text" name="uname" required class="form-control" />
															</div>

															<div class="form-group">
																<label for="name">PASSWORD</label>
																<input type="password" name="pwd" required class="form-control" />
															</div>

															<div class="form-group">
																<input type="submit" name="login" value="Login" class="btn btn-primary" />
															</div>
												</fieldset>
									</form>
									<span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
									<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
						 </div>
			</div>
				   <div class="row">
					<div class="col-md-4 col-md-offset-4 text-center">    
					New User? <a href="signup.php">Sign Up Here</a>
					</div>
				</div>
</div>
	</div>
<script src="jquery-1.10.2.js"></script>
<script src="bootstrap.min.js"></script>
</body>
</html>