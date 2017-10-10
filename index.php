<?php
$date =  date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";
$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";
$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year); 
echo '<br>';
str_replace('-','/',$date); 
echo '2) $date with - replaced with /: ' .$date. '<br>';
$result = strnatcasecmp($date, $tar);
if($result > 0) {
  echo '3) $date compared to $tar: The Future <br>';
} else if($result < 0) {
  echo '3) $date compared to $tar: The Past <br>';
} else {
  echo '3) $date compared to $tar: Oops <br>';
}
$i = strpos($date,'/');
$r = strpos($date,'/', 5);

print "4) Positions of / in $date: " .$i. " " .$r."<br>";

$date_array = explode('/',$date);  
  
$words_in_date_array = count($date_array);  
print "5) Number of Words in $date: " .$words_in_date_array. "<br>";

$len = strlen($date);  
  
print "6) Length of $date String:" .$len. "<br>";
$ASCII = ord($date[0]);
print "7) ASCII value of first char in $date string:  " .$ASCII. "<br>";
$last_two_chars = substr($date, -2);
print "8) Last two Chars in $date: " .$last_two_chars. "<br>";
$date_array = explode('/',$date);  
  
echo "9) Date Array: ";
print_r($date_array);
echo  "<br>";

print "10) Leap Years";
foreach ($year as $leapcheck) {
  $current_year = $year;
  for($y=0; $y<count($year); $i++){
    {
      if($current_year % 4 == 0){
      continue;
  		}
      else if($current_year % 400 == 0){
      	 $leap[] = true;
      	 break;
      }
     
      else if($current_year % 100 == 0){
      	$leap[] = true;
      	break;
      }
      else{
      	$leap[] = false;
      }
      
      
    }
  }
}
print "2012:" .$leap[0]. "| 396: " .$leap[1]. "| 300: " .$leap[2]. "| 2000: " .$leap[3]. "| 1100: " .$leap[4]. "| 1089: " .$leap[5]. "|" "<br>"
?>
