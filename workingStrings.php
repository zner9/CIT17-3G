<?php 
// Working with Strings
$characterName = "Renz Louis";
        $characterAge = 23;
        $gpa = 30.3;
        $isMale = true;
        echo "$characterName[1] <br>";
        echo str_replace("Louis", "Zner", $characterName);
        echo substr($characterName, 5, 3);
        echo strlen($characterName);
        echo ("<br> Hi! my name is $characterName. I am $characterAge years old");
?>
