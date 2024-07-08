<html>
<body>
<form method="post" action="program2.php">
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
echo("Uppercase=".strtoupper($s1));
echo("<br>Lowercase=".strtolower($s1));
echo("<br><br>Uppercase=".strtoupper($s2));
echo("<br>Lowercase=".strtolower($s2));
$k=strpos($s1,$s2);
if($k==NULL)
echo("<br>Substring not found........");
else
echo("<br>Substring found starting position=".$k);
$k=strrpos($s1,$s2);
if($k==NULL)
echo("<br>Substring not found........");
else
echo("<br>substring found ending position=".$k);
?>