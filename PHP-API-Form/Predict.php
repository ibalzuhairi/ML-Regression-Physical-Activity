<?php


// Use ls command to shell_exec
// function
//$output = shell_exec('python Predict.py 9 1200 1200 1200 1200 1200 1200 1200 1 68');
      
// Display the list of all file
// and directory
//echo "<pre>$output</pre>";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $AD_Month = $_POST["AD_Month"];
    $AH_Month = $_POST["AH_Month"];
    $Long_Vacation = $_POST["Long_Vacation"];
    $AD_WeekdayNum = $_POST["AD_WeekdayNum"];
    $Wake_Up = $_POST["Woke_Hour"];
    $temp_min = $_POST["temp_min"];
    $temp_max = $_POST["temp_max"];
    $Lag1 = $_POST["Lag1"];
     $Lag2 = $_POST["Lag2"];
      $Lag3 = $_POST["Lag3"];
       $Lag4 = $_POST["Lag4"];
        $Lag5 = $_POST["Lag5"];
         $Lag6 = $_POST["Lag6"];
          $Lag7 = $_POST["Lag7"];
           $Lag8 = $_POST["Lag8"];
       
           
           
           // build sys.arg string 
           
           $str =  $AD_Month." ".$AH_Month." ".$Long_Vacation." ".$AD_WeekdayNum." ".$Wake_Up." ".$temp_min." ".$temp_max." ".$Lag1." ".$Lag2." ".$Lag3." ".$Lag4." ".$Lag5." ".$Lag6." ".$Lag7." ".$Lag8;
           $str = '/usr/bin/python3 Predict.py '.$str.' 2>&1';
          // echo $str;
            $output = exec($str);
// $output = exec('pip3 install pandas --no-cache-dir 2>&1');
//$output = exec('python3 Predict2.py ');
  
// Display the list of all file
// and directory
echo $output;
           
}


?>