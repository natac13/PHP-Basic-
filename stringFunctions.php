<!DOCTYPE html>


<html lang="en">
<head>
    <title>String Functions</title>
</head>
<body>

<?php
    $first = "The quick brown fox";
    $second = " jumped over the lazy dog.";

    $third = $first;
    // the dot char is used to concantenate strings together
    $third .= $second;
    echo $third;
?>
<br /> 
<br>
Lowercase : <?php echo strtolower($third); ?><br>
Uppercase : <?php echo strtoupper($third); ?><br>
Uppercase first : <?php echo ucfirst($third); ?><br>
Uppercase each word's first letter : <?php echo ucwords($third); ?>
<br>
Length : <?php echo strlen($third);?> <br>
<!-- Trim removes the whitespaces around the B C D string-->
Trim : <?php echo "A" . trim(" B C D ") . "E"; ?><br>
<!-- Find will return the word AND THEN everything that follows.-->
Find : <?php echo strstr($third, "brown"); ?> <br>
<!-- replace is pretty straight forward-->
Replace by string : <?php echo str_replace("quick", "super-fast", $third); ?> <br>
<br>

Repeat : <?php echo str_repeat($third, 2); ?> <br>
<!-- second arg is the start and then the end position-->
Make substrings : <?php echo substr($third, 5, 10); ?> <br>
<!-- gets the positon of the arg-->
Find position : <?php echo strpos($third, "brown"); ?><br>
<!-- this is the same as the over find in that it will return the character and everthing afterwards.-->
Find character : <?php echo strchr($third, "z"); ?><br>


</body>




</html>

