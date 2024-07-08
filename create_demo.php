<?php
$con=mysql_connect("localhost","root"," ");
if($con==false)
 die("Error in database connection...");
mysql_select_db("sybbaca");
$k=mysql_query("create table employee(eno int,ename varchar(20),address text, join_date date,sal float)");
if($k==true)
  echo("Table Created....");
else
  echo("Table already exist...");
mysql_close($con);
?>