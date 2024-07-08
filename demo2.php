<?php
echo("<table border='1'>");
echo("<tr>");
echo("<th>HTTP_HOST</th>");
echo("<th>SERVER_PROTOCL</th>");
echo("<th>REQUEST_METHOD</th>");
echo("<th>SERVER_NAME</th>");
echo("<th>SERVER_PORT</th>");
echo("</tr>");
echo("<tr>");
echo("<td>".$_SERVER['HTTP_HOST']."</td>");
echo("<td>".$_SERVER['SERVER_SOFTWARE']."</td>");
echo("<td>".$_SERVER['REQUEST_METHOD']."</td>");
echo("<td>".$_SERVER['SERVER_NAME']."</td>");
echo("<td>".$_SERVER['SERVER_PORT']."</td>");
echo("</tr>");
echo("</table>");
?>
