<!DOCTYPE html>


<html lang="en">
<head>
<?php
    echo "<title>Natac template for PHP</title>";
?>    
</head>
<body>

<?php
    // is a comment
    
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MISE')) {
?>
    <h3>strpos() must have retunres True</h3>
    <p>You are therefore using Internet explorer</p>
<?php
    } else {
?>
    <h3>strpos() must have been False</h3>
    <p>And it would appera that you are not using Internet Explorer</p>
<?php
    }
?>

<br /> 
<?php
// This will output a list of all the varibles I can access with the $_SERVER variable that php builds for me


    foreach ($_SERVER as $key=>$value) {
        echo $key . "=" . $value;
        echo "<br><br>";
    }
?>

</body>




</html>

