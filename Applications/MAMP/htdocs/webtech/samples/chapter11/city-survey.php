<!DOCTYPE html>
<!--Author:
	Date:
	File:	  city-survey.php
	Purpose:

-->

<html>
<head>
	<title>CITY SURVEY</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php
		$citySurvey = array("London", "Paris", "Rome", "Rome", "Paris",
		"Paris", "Paris", "London", "Rome", "Rome",
		"Paris", "London", "Paris", "London", "London",
		"London", "Paris", "London", "Paris", "Rome");

		// Add the code needed to count the number of times that each city occurs in the array
    $cityCount = 0;
    for($i = 0; $i < 20; $i = $i + 1)

		if ($citySurvey == "London")
      $london = $london + 1;
    if  ($citySurvey == "Paris")
      $paris = $paris + 1;
    if  ($citySurvey == "Rome")
      $rome = $rome + 1; 
		print ("<h1>CITY SURVEY RESULTS</h1>");
		// display the results in a table
    print("<table border = \"1\">");
		print ("<tr><td>$city</td><td>$citySurvey[$i]</td></tr>");
				

		print("</table>");
   

		?>
</body>
</html>
