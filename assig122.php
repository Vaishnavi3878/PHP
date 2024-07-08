<html>
<body>
<form method="post" action="assig122.php">
Enter Radius:
<input type="text" name="t1"><br>
Enter side of square:
<input type="text" name="t2"><br>
Enter length:
<input type="text" name="t3"><br>
Enter breadth:
<input type="text" name="t4"><br>
Enter
<input type="submit">
</form>
</body>
</html>
<?php
$r=$_POST["t1"];
$s=$_POST["t2"];
$l=$_POST["t3"];
$b=$_POST["t4"];
$carea=(3.14*$r*$r);
$sarea=($s*$s*$s*$s);
$rarea=($l*$b);
echo("<br>Area of circle:".$carea);
echo("<br>Area of Square:".$sarea);
echo("<br>Area of Rectangle:".$rarea);
?>
  