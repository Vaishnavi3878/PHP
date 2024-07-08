<html>
<body>
<form method="post" action="mult.php">
<input type="text" name="t1"><br>
<input type="submit" name="Display"><br>
</form>
</body>
</html>
<?php
$n=$_POST["t1"];
echo"<br>Table of $n is:";
for($i=1;$i<=10;$i++)
{
   echo"<br> $n x $i=".($n*$i);
}
?>