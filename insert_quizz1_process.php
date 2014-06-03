<?php 

include('config.php');

$question = $_POST["question"];
$c_answer = $_POST['c_answer'];
mysql_query("insert into quizz1(question, c_answer) values('" . $question . "', '" . $c_answer . "')");
echo "<h3><a href='insert_quizz1.php'>Insert another question </a></h3> <br/ >";
echo "<h3><a href='teacher.php'>Go back to the teacher's menu </a></h3> <br/ ><br/>";
