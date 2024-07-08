<html>
<body>
<form method="post" action="sum_digit.php">
Enter No:
<input type="text" name="t1"><br>
<input type="submit" value="Display">
<input type="reset" value="Clear"><br>
</form>
</body>
</html>
<?php
$n=$_POST["t1"];
$s=0;
while((int)$n>0)
{
$d=$n%10;
$s=$s+$d;
$n=$n/10;
}
echo("Sum=".$s);
?>
