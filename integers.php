<!DOCTYPE html> 

<html lang="en">
<head>
    <title></title>    
<body>
<?php
    $var1 = 3;
    $var2 = 4;

?>

Basic Math : <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?><br>
Absolute value : <?php echo abs(0 - 300); ?><br>
Exponential : <?php echo pow(2, 8); ?><br>
Square root : <?php echo sqrt(100); ?><br>
Modulo : <?php echo fmod(20, 7); ?><br>
Random : <?php echo rand(); ?><br>
Random (max, min) : <?php echo rand(1, 10); ?><br>

+= : <?php $var2 += 4; echo $var2; ?><br>
-= : <?php $var2 -= 4; echo $var2; ?><br>
*= : <?php $var2 *= 3; echo $var2; ?><br>
/= : <?php $var2 /= 4; echo $var2; ?><br>
<br>
Increment : <?php $var2++; echo $var2; ?><br>
Decrement : <?php $var2--; echo $var2; ?><br>

<br>
<?php 
    // this will work but should not be relied upon
    echo 1 + "2 houses";
?>



</body>




</html>

