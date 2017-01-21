<?php
$jsonData = file_get_contents('http://www.labangla.com/json/jsonmovie.json');
$json     = json_decode($jsonData,true);

echo "<ul>" ;
$outPut = "";


foreach ($json['movies'] as $key => $movie) {

 	$outPut .= "<h4>" . "Title of the Moive : " .  $movie['name'] . "</h4>";
	$outPut .= "<li>" . "Lead Actor : " . $movie['actor']  . "</li>" ;
 	$outPut .= "<li>" . " Release date of the Movie : " . $movie['release_date']  . "</li>" ;
}

echo "</ul>";

echo $outPut;

?>