<!DOCTYPE html>

<html lang="en">
<head>
<title>Arrays</title>
</head>


<body>

<?php

    $numbers = array(4,8,15,16,23,42);
        echo $numbers[0];
?><br>
<?php

        $mixed = array(6, "fox", "dog", array("x", "y", "z"));

?><br>

<?php echo $mixed[2]; ?><br>
<?php echo $mixed[3]; ?><br>

<pre>
<?php echo print_r($mixed); ?><br>
</pre>
<!-- I can append stuff to an array by either [] or using a number index that is one more than last --> 

Count : <?php echo count($numbers); ?><br>
Max value : <?php echo max($numbers); ?><br>
Min value : <?php echo min($numbers); ?><br>
<br>
Sort : <?php sort($numbers); print_r($numbers); ?><br>
<br>
<pre>
Reverse Sort : <?php rsort($numbers); print_r($numbers); ?><br>
</pre>

<br>
Implode : <?php echo $num_string = implode(' * ', $numbers); ?><br>
Explode : <?php print_r(explode(' * ', $num_string)); ?><br>

<br>
15 In Array? : <?php echo in_array(15, $numbers); ?><br>
19 In array? : <?php echo in_array(19, $numbers); ?><br>

<br>


</body>

