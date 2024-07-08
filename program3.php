<html>
<body>
<form method="post" action="program3.php">
Enter string 1:
<input type="text" name="t1"><br>
Enter string 2(find):
<input type="text" name="t2"><br>
Enter string 3(replace):
<input type="text" name="t3"><br>
<input type="submit" value="OK">
</form>
</body>
</html>
<?php
$s1=$_POST["t1"];
$s2=$_POST["t2"];
$s3=$_POST["t3"];
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
$k=substr_count($s1,$s2);
if($k==NULL)
echo("<br>Substring not found........");
else
echo("<br>Substring count=".$k);
$s=str_replace($s2,$s3,$s1);
echo("<br><br>Replace string=".$s);
?>