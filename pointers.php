<!DOCTYPE html>


<html lang="en">
<head>
    <title></title>    
<body>
<?php
    $ages = array(4,8,15,16,23,27,62);

    // current pointer value
    echo "1: " . current($ages) . "<br>";

    // next will move pointer to the next spot
    next($ages);
    echo "2: " . current($ages) . "<br>";
    next($ages);

    // prev will go back one
    prev($ages);
    echo "3: " . current($ages) . "<br>";

    // reset goes back to the start
    reset($ages);
    echo "4: " . current($ages) . "<br>";

    // end goes straight to the last element
    end($ages);
    echo "5: " . current($ages) . "<br>";


    reset($ages);
    // AND why this useful, and will set stage for working with databases
    /* this while loop is doing an assignment for it's condition
     * so as long as there is something to assign then the loop will run 
     * however if $age gets a null value then the expression is equlavent to 
     * false and will not excute the loop
     */
    while($age = current($ages)) {
        echo $age . ", ";
        next($ages);
    }
    // for cannot use foreach when working with databases since the foreach only work on php arrays and not
    // the database arrays 


?>


</body>




</html>

