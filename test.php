<!DOCTYPE html>


<html lang="en">
<head>
<?php
    echo "<title>PHP is fun!</title>";
?>    
</head>
<body>

<?php
    // is a comment
    # so is this but not common in php
    // should use the forward slashes while commenting in php
    
    
    $x = "hello, world";
    echo $x;
    $y = 5;
    $v = 8;
    echo "<br />";
    echo "$y + $v <br />";
    echo strlen($x);
    echo "<br />";
    $stringlenght = strlen($x);
    echo "<p>sting lenght of the string 'hello, world' = $stringlenght</p> ";
    echo "<br />";// this just testing to see is I can comment on the same line as code
    /* this is a mulit line comment in php
      alway rememeber to keep the comment up to date and be consistent with them
    */
?>
<br /> 
<?php
    echo "$x again<br />";

?>

</body>




</html>
