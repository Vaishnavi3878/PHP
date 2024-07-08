<html>
<body>
<form method="post" action="string.php">
Enter year:
<input type="text" name="t1"><br>
<input type="submit" value="Display">
<input type="reset" value="Clear"><br>
</form>
</body>
</html>
<?php
$y=$_POST["t1"];
if($y%4==0)
  echo("year is leap year".$y);
else
  echo("year is not leap year".$y);
?>