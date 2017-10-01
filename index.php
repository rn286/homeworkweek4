<Title>Operators, If/Else, Switch, Loops</Title>
<h1>Homework Assignment # 4</h1>

<?php

//Task #2
$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
$year1 = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
echo '<hr>';

//Task #3
if ($date > $tar) {
        echo 'The Future';
    } elseif ($date = $tar) {
		echo 'Oops';
	} else{
        echo 'The Past';
    }
echo '<hr>';

//Task #4
$pattern = '/';
$start = 0;
while(($newLine = strpos($date, $pattern, $start)) !== false){
    $start = $newLine + 1;
echo "A '/' is found in string position <u>$newLine</u> <br>";
 
}
echo '<hr>';

//Task #5
$word_datecount = str_word_count($date);
echo "The number of words in $date is <u>$word_datecount</u>.<br>";
echo '<hr>';

//Task #6
$date_count = strlen($date);
echo "The length of date $date is <u>$date_count</u>. <br>";
echo '<hr>';

//Task #7
$task7_string = 'Today is Friday';
$ascii_value = ord($task7_string);
echo "The ASCII value of the first character in '$task7_string' is <u>$ascii_value</u>. <br>";
echo '<hr>';

//Task #8
$task8_string = substr($date, -2);
echo "The last two charactes in $date are <u>$task8_string</u>.<br>";
echo '<hr>';

//Task #9
list($year, $month, $day) = explode("/", $date);
echo "Seperate each array element: <u>$month $day $year</u>";
echo '<hr>';

//Task #10
foreach ($year1 as $yeardate){
//To test if array loops through
//echo ($yeardate)
if( (0 == $yeardate % 4) and (0 != $yeardate % 100) or (0 == $yeardate % 400) )
		{
			echo "$yeardate true <br>";  
		}
		else
		{
			echo "$yeardate false <br>";  
		}	
	
}


?>