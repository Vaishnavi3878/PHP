<html>
<body>
<form method="post" action="arithmatic.php">
Enter No1:
<input type="text" name="t1"><br>
Enter No2:
<input type="text" name="t2"><br>
<input type="submit" value="Addition">
<input type="reset" value="Clear"><br>
</form>
</body>
</html>
<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$a+$b;
$d=$a-$b;
$e=$a*$b;
$f=$a/$b;
$g=$a%$b;
echo("Addition=".$c);
echo("<br>Substraction=".$d);
echo("<br>Multiplication=".$e);
echo("<br>Division=".$f);
echo"<br>modulo=",$g;
?>

