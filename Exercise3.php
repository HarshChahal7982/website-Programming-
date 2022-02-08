<?php

/* 1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:
It's August, so it's still holiday.
Not August, This is Month-name so i don't have any holidays 
You can use date(F) function to get the current month name */

 $month= date('M');
if($month=="Aug"){
   echo "It's August, so it's still holiday.";
}else{
    echo "Not August, This is Month-name so i don't have any holidays";
}
echo"<br>"; 


/* 2. Assign color red to a variable name $color and check to print one the following responses using if else statement 
The color is red. 
The color is not red. */
$color="red";
if($color=="red"){
    echo "The color is red";
}else{
    echo "The color is not red";
}
echo "<br>";


/* 3. Write a program to grade students based on their total score for a subject. The grading scheme is: Excellent : >80 ;Great >70 & less than 80;Good >60 & less than 70; Pass >50 & less than 60 & Fail <50 */

  $grade=85;
 if($grade>80){
     echo"The student grade is ";
    echo"Excellent";
 
}elseif($grade>70 && $grade<80){
    echo"The student grade is ";
    echo"Great";
  
}elseif($grade>60 && $grade<70){
    echo"The student grade is ";
    echo"Good";
   
}elseif($grade>50 && $grade<60){
    echo"The student grade is ";
    echo"pass";
  
}else {
    echo"The student grade is ";
    echo"fail";
} 
echo"<br>"; 


/* 6. Use While loop to print the following pattern: 
*
**
***
****
*****
******
*******
******** */

  for($m =1; $m<=8; $m++){
   for($n =1; $n<=$m; $n++){
       echo "*"; 
   }
echo"<br>";
};
echo"<br>";  


/* 5. Use a looping statement to construct the following pattern: 
12345678
1234567
123456
12345
1234
123
12
1 */

for($i =8; $i<9;$i--){
    for($j=1; $j<=$i;$j++){
        echo "$j";
    }
    echo"<br>";
}
echo "<br>";

/* 4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting.) */


?> 
<a href="https://harsh21001.github.io/website-project/" target="_blank">webpage'</a>
<a href="https://github.com/harsh21001/website-project" target="_blank">github repo</a>