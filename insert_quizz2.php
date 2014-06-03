<?php include('config.php'); ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="">
        <meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		
		<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
        
        <title>Insert Quizz2</title>
        
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
							<form action = "insert_quizz2_process.php" method="post">
									
									<h3>Insert the question:</h3>
									<textarea  name="question" cols="45" rows="5" placeholder = "Insert question"></textarea><br /><br /><br />
								
								
								
									<h3>The correct answer is:</h3>
									<textarea  name="c_answer" cols="45" rows="5" placeholder = "Insert correct answer"></textarea><br /><br /><br />
					
									
								<input class = "submit_quizz"type="submit" name="submitForm"  value="SUBMIT" /> 
								<input class = "clear_quizz"type="reset" value="CLEAR" />
							</form>
							
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
