<html>
<body>
<form method="post" action="assig121.php">
Enter length:
<input type="text" name="t1"><br>
Enter breadth:
<input type="text" name="t2"><br>
Enter height:
<input type="text" name="t3"><br>
<input type="submit">
</form>
</body>
</html>
<?php
$l=$_POST["t1"];
$b=$_POST["t2"];
$h=$_POST["t3"];
$s=2*(($l*$b)+($l*$h)+($b*$h));
$v=($l*$b*$h);
echo("<br>Surface Area:".$s);
echo("<br>Volume:".$v);
?>
  