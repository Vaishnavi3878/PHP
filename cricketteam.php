<?php
   $xml=simplexml_load_file("cricketteam.xml") or die("cannot load");
   $xmlstring=$xml->asXML();
   echo$xmlstring;
?>