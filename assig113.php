<html>
<body>
<form method="post" action="assig113.php">
Enter temperature in celsius:
<input type="text" name="t1"><br>
<input type="submit">
</form>
</body>
</html>
<?php
$c=$_POST["t1"];
$f=$c*(9/5)+32;
echo("\ntemperature in fahrenheit:".$f);
?>
  