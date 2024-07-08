<html>
<head>
<body>
<form mothod="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
Enter Number:
<input type="text" name="num"><br><br>
<input type="submit" name="t2" value="Check">
</form>
</body>
<?php
$n=$_POST['num'];
$temp=$n;
$s=0;
while($n>0)
{
  $d=$n%10;
  $s=$s+$d;
  $n=parseInt($n/10);
}
  echo("sum=".$s);

?> 
</html>