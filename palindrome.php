<html>
<head>
<body>
<form mothod="post" action="<?php echo($_SERVER['PHP_SELF']); ?>">
<h1>Check Number is PAlimdrome or not</h1>
Enter Number:
<input type="text" name="t1"><br><br>
<input type="submit" name="t2" value="Check">
</form>
</body>
</head>
</html>
<?php
$n=$_POST['t1'];
$temp=$n;
$r=0;
while($n>0)
{
  $d=$n%10;
  $r=($r*10)+$d;
  $n=parseInt($n/10);
}
if($temp==$r)
{
  echo("Number is Palindrome");
}
else
{ 
 echo("Number is not Palindrome");
}
?> 