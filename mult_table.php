<html>
<body>
<form method="post" action="mult_table.php">
Enter year:
<input type="text" name="t1"><br>
<input type="submit" value="Display">
<input type="reset" value="Clear"><br>
</form>
</body>
</html>
<?php
$n=$_POST["t1"];
for($i=1;$i<=10;$i++)
{
echo("<br>".$n*$i);
}
?>
