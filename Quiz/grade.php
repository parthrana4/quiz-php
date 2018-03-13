<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	

</head>

<body>

	<div id="page-wrap">

		<h1>RESULT</h1>
		
        <?php
$user='root';
$passwd='';
$db='tpo';
$con=new mysqli("localhost",$user,$passwd,$db) or die("unable to connect");
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
			$answer7 = $_POST['question-7-answers'];
			$answer8 = $_POST['question-8-answers'];
			$answer9 = $_POST['question-9-answers'];
			$answer10 = $_POST['question-10-answers'];
            $totalCorrect = 0;
            
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "C") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
            if ($answer5 == "A") { $totalCorrect++; }
			if ($answer6 == "D") { $totalCorrect++; }
			if ($answer7 == "D") { $totalCorrect++; }
			if ($answer8 == "B") { $totalCorrect++; }
			if ($answer9 == "B") { $totalCorrect++; }
			if($answer10 == "B"){ $totalCorrect++; }
            echo "<div id='results'>$totalCorrect / 10 correct</div>";
           // echo "$totalCorrect";
			$pid=$_POST['pid'];
         $sql="insert into marks values($pid,$totalCorrect)";
	$query=mysqli_query($con,$sql);

if($query!=0){

}
else{
	
	echo"problem";
}
        ?>
	</div>
	</div>
	
	

</body>

</html>