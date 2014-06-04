<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="keywords" content="">
        <meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		
		<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>
        
        <title>Main Page</title>
        
        <link href="css/main.css" rel="stylesheet" type="text/css">
        
    </head>
    
    <body>
    	<div id="wrapper">
		
				<header>
					<div class = "container">
						<img src="img/logo.png" alt="Logo" />
						<div id = "see_results_button">
							<form method = "get" action = "see_results.php">
								<input class="see_results_button" type="submit" value="See Results" >
							</form>
						</div><!--see_results_button-->
						<div id = "sign_out_button">
							<form method = "get" action = "sign_out.php">
								<input class="sign_out_button" type="submit" value="Sign Out" >
							</form>
						</div><!--sign_out_button-->
					</div>
				</header><!--header-->
				<section>
					<div class="container">
						<div id = "list_of_courses">
							<nav>
								<ul>  
									<li class = "course1"><a href="course_1.php" >Alexandru Lapusneanu de Costache Negruzzi</a></li>
									<li class = "course2"><a href="course_2.php" >Moara cu noroc de Ioan Slavici</a></li>
									<li class = "course3"><a href="course_3.php">Harap Alb de Ion Creanga</a></li>
									
								</ul>
							</nav>
						</div><!--list_of_courses-->
						 
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
