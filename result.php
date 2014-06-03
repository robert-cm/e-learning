<?php include('config.php'); ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="">
        <meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		
		<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
        
        <title>Result</title>
        
        <link href="css/main.css" rel="stylesheet" type="text/css">
        
    </head>
    
    <body>
    	<div id="wrapper">
		
				<header>
					<div class = "container">
						<img src="img/logo.png" alt="Logo" />
					</div>
				</header><!--header-->
				<section>
					<div class="container">
						<div id = "image_container">
					
						</div><!--image_container-->
						<div id = "quizz_score">
							<?php

								if( isset( $_POST['submitForm'] ) ) {

									//talking input values
									if( isset($_POST['first_question']) ) {
										$first_question = $_POST['first_question'];
									} else {
										$first_question = '';
									}
									
									if( isset($_POST['second_question']) ) {
										$second_question = $_POST['second_question'];
									} else {
										$second_question = '';
									}

									if( isset($_POST['third_question']) ) {
										$third_question = $_POST['third_question'];
									} else {
										$third_question = '';
									}

									if( isset($_POST['question4']) ) {
										$question4 = $_POST['question4'];
									} else {
										$question4 = '';
									}
									
									if( isset($_POST['question5']) ) {
										$question5 = $_POST['question5'];
									} else {
										$question5 = '';
									}
									
									if( isset($_POST['question6']) ) {
										$question6 = $_POST['question6'];
									} else {
										$question6 = '';
									}
									
									if( isset($_POST['question7']) ) {
										$question7 = $_POST['question7'];
									} else {
										$question7 = '';
									}
									
									if( isset($_POST['question8']) ) {
										$question8 = $_POST['question8'];
									} else {
										$question8 = '';
									}

									//correct answers
									$correct_1 = "1_twelve";
									$correct_2 = "2_two";
									$correct_3 = "3_match";
									$correct_4 = "None";
									$correct_5 = "4100";
									$correct_6 = "Mary";
									$correct_7 = "Asking for them";
									$correct_8 = "Match";
									

									//beginning at 0 points
									$points = 0;

									//verifying answers...
									if( $first_question == $correct_1 ) {
										$points++;
									}

									//verifying answers...
									if( $second_question == $correct_2 ) {
										$points++;
									}

									//verifying answers...
									if( $third_question == $correct_3 ) {
										$points++;
									}

									//verifying answers...
									if( $question4 == $correct_4 ) {
										$points++;
									}
									
									//verifying answers...
									if( $question5 == $correct_5 ) {
										$points++;
									}
									
									//verifying answers...
									if( $question6 == $correct_6 ) {
										$points++;
									}
									
									//verifying answers...
									if( $question7 == $correct_7 ) {
										$points++;
									}
									
									//verifying answers...
									if( $question8 == $correct_8 ) {
										$points++;
									}

									$id_user = $_SESSION['id_user'];

									//insert into mysql table
									mysql_query("insert into answers(id_user, points) values('" . $id_user . "', '" . $points . "')");
									echo "Your points are $points of 8.";

								}

							?>
						</div><!--quizz_score-->
						<div id = "score">
							<form action = "main_page.html">
								<input class="result_button" type="submit" value="Ok"  >
							</form>
						</div><!--score--> 
					</div>
				</section>
				<footer>
					<div class="container">
						<p>Copyright &copy; FTW Team </p>
					</div><!--container-->
				</footer><!--footer-->

		
		</div><!-- #wrapper -->
    </body>
</html>     
