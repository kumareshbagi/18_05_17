<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A portfolio template that uses Material Design Lite.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Events</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-pink.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header mdl-layout__header--waterfall portfolio-header">
            <div class="mdl-layout__header-row portfolio-logo-row">
                <span class="mdl-layout__title">
                    <div class="portfolio-logo"></div>
                    <span class="mdl-layout__title">Enjoy Club</span>
                </span>
            </div>
            <div class="mdl-layout__header-row portfolio-navigation-row mdl-layout--large-screen-only">
                <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                    <a class="mdl-navigation__link is-active" href="index.php">EVENTS</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer mdl-layout--small-screen-only">
            <nav class="mdl-navigation mdl-typography--body-1-force-preferred-font">
                <a class="mdl-navigation__link is-active" href="index.php"></a>
            </nav>
        </div>
         <?php
		                    session_start();
                            include_once('conn.php');
                            $id=$_GET['id'];
                            //echo $id;
	                         $_SESSION["EID"]=$id;
                            $sql1 = "SELECT * FROM EVENTS WHERE EID='$id' ";
                            $result = $conn->query($sql1);
                              while($array=mysqli_fetch_row($result))
                             {
                                //$var=$array[0];
                               
                            ?>
        <main class="mdl-layout__content">
            <div class="mdl-grid portfolio-max-width">
                <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text"><?php echo $array[1]; ?></h2>
                    </div>
                    <div class="mdl-card__media">
                        <img class="article-image" <?php echo "src=$array[11]"; ?> border="0" alt="">
                    </div>
                    <div class="mdl-card__supporting-text">
                    </div>
					
                    <div class="mdl-grid portfolio-copy">
                        <h3 class="mdl-cell mdl-cell--12-col mdl-typography--headline">Event Description</h3>
							<div class="mdl-cell mdl-cell--6-col mdl-card__supporting-text no-padding">

											<div class="container">
					  
												<div class="row">
								<div class="col-sm-8">
									   <p>
																   <?php echo $array[14]; ?>
																</p>
											<p>
												The oragnization That is going to Host Event is : <?php echo $array[2]; ?> <br/>
												The Event is going to start on :  <?php echo $array[5]; ?> <br/>
												So please hurry up before it ends on :  <?php echo $array[6]; ?><br/>
												Tickets to the events sell out just about as fast as they go on sale. General admission early bird and advance tickets are available for purchase, and at a lower price, but these sell out quickly.
												So the ticket price for  <b><?php echo $array[1]; ?></b> Event is Rs. <?php echo $array[8]; ?><br/>
												The Venue of <b><?php echo $array[1]; ?></b> Event is: <b><?php echo $array[4]; ?></b>
											</p>
										<p>Note: There are only <?php echo $array[10]; ?> seats are there so dont wait more.
										</p>
								   <div class="col-sm-4">
									   <p>
									   To know More about this Event Please visit website:<b><?php echo $array[7]; ?></b><br/></p>
									   Or Contact The Event Person:<b><?php echo $array[9]; ?></b>

									   <p>Register here to Book Tickets</p>
									   <a href="login.php">BookTicket</a>
								  </div>
									</div>
						</div>
			<hr>

											<p>
											The Terms and Conditions for this Event is:
												<?php echo $array[12];?>

											</p>



							</div>
					</div>
            </div>
             <?php }
$conn->close();
    ?>
            
                </div>
            </div>
        </main>
    </div>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>

</html>