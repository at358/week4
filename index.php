<?php
$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year)

str_replace('-','/',$date); 

echo "2) $date with - replaced with /: " .$date. "<br>";

$result = strnatcasecmp($date, $tar);

if($result > 0) {
  echo "3) $date compared to $tar: The Future";

} else-if($result < 0) {
  echo "3) $date compared to $tar: The Past";

}else: 
  echo "3) $date compared to $tar: Oops" ;

$i = strpos($date,'/');

$r = strpos($date,'/', 4);

echo "4) Positions of "/" in $date: " .$i. " " .$r."<br>";

$date_array = explode('/',$date)  
  
$words_in_date_array = count($date_array)  

echo "5) Number of Words in $date: " .$words_in_date_array. "<br>";

$len = strlen($date);  
  
echo "6) Length of $date String:" .$len. "<br>";

$ASCII = ord($date[0]);

echo "7) ASCII value of first char in $date string:  " .$ASCII. "<br>";

$last_two_chars = substr($date, -2);

echo "8) Last two Chars in $date: " .$last_two_chars. "<br>";

$date_array = explode('/',$date);  
  
echo "9) Date Array: " print_r($date_array) "<br>" ;

echo "10) Leap Years";

foreach ($year as $leapcheck) {
  if(if( (0 == $year % 4) and (0 != $year % 100) or (0 == $year % 400) )) {
    $leap[] = True;
}
  else: 
    $leap[] = False;  
}

echo "2012:" .$leap[0]. "| 396: " .$leap[1]. "| 300: " .$leap[2]. "| 2000: " .$leap[3]. "| 1100: " .$leap[4]. "| 1089: " .$leap[5]. |"

for($y=0; $i<16; $i++)
    {
        $ = date("d", mktime(0, 0, 0, 2, 29, date("Y")+$i));
        if($year == 29)
        {
            $year = date("Y")+$i;
            echo "<p>The next leap year is 29th February $year</p><br>";
        }
    }

?>
