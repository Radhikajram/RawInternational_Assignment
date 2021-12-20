<?php

function numberDivisibleByFourOrSix($arr) // Fuction checks whether the number is divisible by 4 or 6 or by both.
{
    $resultantArray = array();
   

    foreach ($arr as $i) // Loop through the input values
    {
        
        if ($i % 12 == 0)  {
            $resultantArray[] = $i; // Add to resultant array if divisible by 4 and by 6 
        } elseif ($i % 4 == 0) {
            $resultantArray[] = $i; // Add to resultant array if divisible by 4
        } elseif ($i % 6 == 0) {
            $resultantArray[] = $i; // Add to resultant array if divisible by 6
        }
       
      }	
     
      return  $resultantArray;
}

    if (isset($_POST['submit'])){

      
        /* pass the inputed array  numbers to function */
        $outputArray = numberDivisibleByFourOrSix($_POST['numbers']);
 
    }

  
?>
<!DOCTYPE HTML>
<html>  
<body>

<form action="Task1_4_6_divisible_numbers.php" method="POST">
NUMBER-1: <input type="number" name="numbers[]",min="0",max="99999" value=0><br>
NUMBER-2: <input type="number" name="numbers[]",min="0",max="99999" value=0><br>
NUMBER-3: <input type="number" name="numbers[]",min="0",max="99999" value=0><br>
NUMBER-4: <input type="number" name="numbers[]",min="0",max="99999" value=0><br>
NUMBER-5: <input type="number" name="numbers[]",min="0",max="99999" value=0><br>

<input type="submit" name="submit">
</form>
<!--show the result only when the resultant array is not empy -->
<?php if(!empty($outputArray)) : ?>
    <h1> Here are the numbers divisible either by 4 or 6 or by both </h1>
    <?php
        foreach($outputArray as $out){
            echo " ".$out;
    }
?>
<?php endif; ?>
</body>
</html>
