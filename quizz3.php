<?php include('config.php'); ?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="">
        <meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		
		<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
        
        <title>Quizz3</title>
        
        <link href="css/main.css" rel="stylesheet" type="text/css">
        
    </head>
    
    <body>
    	<div id="wrapper">
		
				<header>
					<div class = "container">
						<div id ="home_button">
							<form method = "get" action = "main_page.php">
								 <input class="home_button" type="submit" value="" >
							</form>
						</div><!--home_button-->	 
					</div>
				</header><!--header-->
				<section>
					<div class="container">
						<div id="quizz_container">
							<form action ="result3.php" method="post">
								<?php
									//first question
									$sqlCommand = "SELECT id_grid,question, c_answer FROM quizz3 ORDER BY RAND() LIMIT 1"; 
									// Execute the query here now 
									$query = mysql_query($sqlCommand) or die (mysql_error()); 
									// Output the data here using a while loop, the loop will return all members 
									
										while ($row = mysql_fetch_array($query)) { 
										// Gather all $row values into local variables for easier usage in output 
										
										$question = $row["question"]; 
										$c_answer = $row["c_answer"];  
										$_SESSION['raspuns']=$row["c_answer"];
										
									}
									//second question
									$sqlCommand = "SELECT id_grid,question, c_answer FROM quizz3 ORDER BY RAND() LIMIT 1"; 
									// Execute the query here now 
									$query = mysql_query($sqlCommand) or die (mysql_error()); 
									// Output the data here using a while loop, the loop will return all members 
									
										while ($row = mysql_fetch_array($query)) { 
										// Gather all $row values into local variables for easier usage in output 
										
										$question2 = $row["question"]; 
										$c_answer2 = $row["c_answer"];  
										$_SESSION['raspuns2']=$row["c_answer"];
										
									} 
									//third question
									$sqlCommand = "SELECT id_grid,question, c_answer FROM quizz3 ORDER BY RAND() LIMIT 1"; 
									// Execute the query here now 
									$query = mysql_query($sqlCommand) or die (mysql_error()); 
									// Output the data here using a while loop, the loop will return all members 
									
										while ($row = mysql_fetch_array($query)) { 
										// Gather all $row values into local variables for easier usage in output 
										
										$question3 = $row["question"]; 
										$c_answer3 = $row["c_answer"];  
										$_SESSION['raspuns3']=$row["c_answer"];
										
									} 
									//fourth question
									$sqlCommand = "SELECT id_grid,question, c_answer FROM quizz3 ORDER BY RAND() LIMIT 1"; 
									// Execute the query here now 
									$query = mysql_query($sqlCommand) or die (mysql_error()); 
									// Output the data here using a while loop, the loop will return all members 
									
										while ($row = mysql_fetch_array($query)) { 
										// Gather all $row values into local variables for easier usage in output 
										
										$question4 = $row["question"]; 
										$c_answer4 = $row["c_answer"];  
										$_SESSION['raspuns4']=$row["c_answer"];
										
									} 
									//fifth question
									$sqlCommand = "SELECT id_grid,question, c_answer FROM quizz3 ORDER BY RAND() LIMIT 1"; 
									// Execute the query here now 
									$query = mysql_query($sqlCommand) or die (mysql_error()); 
									// Output the data here using a while loop, the loop will return all members 
									
										while ($row = mysql_fetch_array($query)) { 
										// Gather all $row values into local variables for easier usage in output 
										
										$question5 = $row["question"]; 
										$c_answer5 = $row["c_answer"];  
										$_SESSION['raspuns5']=$row["c_answer"];
										
									} 
	
	// close mysql connection 
									mysql_close(); 
								?>
								
								<h3>Question 1.</h3><br />
								<?php echo "$question  <br />"?>
								<textarea  name="question" cols="45" rows="5" placeholder = <?php echo $c_answer; ?>></textarea><br /><br /><br />
											
								<h3>Question 2.</h3><br />
								<?php echo "$question2  <br />"?>
								<textarea  name="question2" cols="45" rows="5" placeholder = <?php echo $c_answer2; ?>></textarea><br /><br /><br />

								<h3>Question 3.</h3><br />
								<?php echo "$question3  <br />"?>
								<textarea  name="question3" cols="45" rows="5" placeholder = <?php echo $c_answer3; ?>></textarea><br /><br /><br />

								<h3>Question 4.</h3><br />
								<?php echo "$question4  <br />"?>
								<textarea  name="question4" cols="45" rows="5" placeholder = <?php echo $c_answer4; ?>></textarea><br /><br /><br />

								<h3>Question 5.</h3><br />
								<?php echo "$question5  <br />"?>
								<textarea  name="question5" cols="45" rows="5" placeholder = <?php echo $c_answer5; ?>></textarea><br /><br /><br />
																<input class = "submit_quizz"type="submit" name="submitForm"  value="SUBMIT" /> 
								<input class = "clear_quizz"type="reset" value="CLEAR" />
							</form  
							
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
