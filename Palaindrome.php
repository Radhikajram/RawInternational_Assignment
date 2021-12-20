<?php

function Palindrome($inputString){  // Function to check whether the string is Palindrome or not.

    // convert the input string to lower case before comparison.
    if (strrev(strtolower($inputString)) == strtolower($inputString)) {  
        return 1;  // return boolean value if the string is Palindrome.
    }
    else{
        return 0; // return boolean value if the string is not a Palindrome.
    }
} 

// Initiazlize the resultant variable

    $result = ' ';
    
    if (isset($_POST['submit'])){   
        /* pass the input string  to a function */
        $result =  Palindrome($_POST['inputstring']); 
    }
?>
<!DOCTYPE HTML>
<html>  
<body>

<form action="Palaindrome.php" method="POST">
InputString: <input type="text" name="inputstring"><br>

<input type="submit" name="submit">
<!--Display the result whether the string is Palindrome or not -->
</form>
<?php if($result == 1) { 
   echo " It is a Plindrome \n" ;
} elseif($result == 0){
    echo " It is not a Plindrome \n" ;
}
?>
</body>
</html>
