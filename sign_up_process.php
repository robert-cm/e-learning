<?php 

include('config.php');

$user = $_POST['user'];
$pass = $_POST['pass'];

$user_check = mysql_query( "select * from users where user='$user'" );
$user_check_array = mysql_fetch_array($user_check);
if( $user_check_array ) {
	echo "User already exists. Try again. ";
	echo "<a href='sign_up.html'>Go back</a>";}

else if ( mysql_query( "insert into users(user, pass) values('$user', '$pass')" ) ) {
	echo "Account created succesfully. Now go back and sign in.";
	echo "<a href='sign_in.php'>Go back</a>";
} else {
	echo "Error creating account. Please try again!";
  echo "<a href='sign_up.php'>Go back</a>";
}