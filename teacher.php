<?php include('config.php'); ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="">
        <meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		
		<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
        
        <title>Teacher</title>
        
        <link href="css/main.css" rel="stylesheet" type="text/css">
        
    </head>
    
    <body>
    	<div id="wrapper">
		
				<header>
					
					<div class = "container">
						<div id = "sign_out_button">
							<form method = "get" action = "sign_out.php">
								<input class="sign_out_button" type="submit" value="Sign Out" >
							</form>
						</div><!--sign_out_button-->
						<img src="img/logo.png" alt="Logo" />
					</div>

				</header><!--header-->
				<section>
					<div class="container">
						<div id="quizz_container">
							<h1>Welcome Teacher!</h1>
							<div id="teacher_left">
								<h3>Chose quizz to insert questions</h3>
								<div id ="ch_quizz1">
									<a href = "insert_quizz1.php">Quizz 1</a>
								</div><!--ch_quizz1-->
								<div id ="ch_quizz2">
									<a href = "insert_quizz2.php">Quizz 2</a>
								</div><!--ch_quizz2-->
								<div id ="ch_quizz3">
									<a href = "insert_quizz3.php">Quizz 3</a>
								</div><!--ch_quizz3-->
							</div><!--teacher_left-->
							<div id="teacher_right">
								<?php
									$sqlCommand = "SELECT avg(points) as average_points FROM course1"; 
									// Execute the query here now 
									$query = mysql_query($sqlCommand) or die (mysql_error()); 
								
											
										$row = mysql_fetch_array($query);
										
												
										$average_points = $row["average_points"];
										
								
								?>
								<?php
									$sqlCommand = "SELECT avg(points) as average_points FROM course2"; 
									// Execute the query here now 
									$query = mysql_query($sqlCommand) or die (mysql_error()); 
									
											
										$row = mysql_fetch_array($query);
										
												
										$average_points2 = $row["average_points"];
										
								
								?>
								<?php
									$sqlCommand = "SELECT avg(points) as average_points FROM course3"; 
									// Execute the query here now 
									$query = mysql_query($sqlCommand) or die (mysql_error()); 
									
											
										$row = mysql_fetch_array($query);
										
												
										$average_points3 = $row["average_points"];
										
								
								?>


								<h3>Average results from all students</h3>	

								<div id ="avg_quizz1">
									<p>Quizz1 : <?php echo round($average_points,1); ?></p>
								</div><!--avg_quizz1-->
								<div id ="avg_quizz2">
									<p>Quizz2 : <?php echo round($average_points2,1); ?></p>
								</div><!--avg_quizz2-->
								<div id ="avg_quizz3">
									<p>Quizz3 : <?php echo round($average_points3,1); ?></p>
								</div><!--avg_quizz3-->
							
							</div><!--teacher_right-->
						</div><!--quizz_container-->
						</br> </br>
					</div><!--container-->
				</section>
				<footer>
					<div class="container">
						<p>Copyright &copy; FTW Team </p>
					</div><!--container-->
				</footer><!--footer-->

		
		</div><!-- #wrapper -->
    </body>
</html>     
