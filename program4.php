<html>
<body>
<form method="post" action="program4.php">
Enter string 1:
<input type="text" name="t1"><br>
Enter string 2(find):
<input type="text" name="t2"><br>
<input type="submit" value="OK">
</form>
</body>
</html>
<?php
$s1=$_POST["t1"];
$s2=$_POST["t2"];
for($i=0;$i<$s1[$i]!='/0';$i++)
{
  if(strcmp($s1[$i],$s2)==0)
    echo("<br>substring found starting position=".$i);
}
for($i=strlen($s1);$i>=0;$i--)
{
  if(strcmp($s1[$i],$s2)==0)
    echo("<br>substring found ending position=".$i);
}
?>