<html>
<body>
<form method="post" action="assig123.php">
Enter DS marks:
<input type="text" name="t1"><br>
Enter DM marks:
<input type="text" name="t2"><br>
Enter PHP marks:
<input type="text" name="t3"><br>
Enter SE marks:
<input type="text" name="t4"><br>
Enter Bigdata marks:
<input type="text" name="t5"><br>
Enter
<input type="submit">
</form>
</body>
</html>
<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$_POST["t3"];
$d=$_POST["t4"];
$e=$_POST["t5"];
$per=(($a+$b+$c+$d+$e)/5);
echo("<br>Percentage:".$per"%");
?>
  