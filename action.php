<!doctype html>
<html>
<body>

<p>Hi <?php echo  ucwords(htmlspecialchars($_POST["name"])); ?>.</p>
<br>
<p>You are <?php echo (int)$_POST['age']; ?> Years old.</p>
</body>
</html>



