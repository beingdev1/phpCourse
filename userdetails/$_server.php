<?php
phpinfo(32);//gives the php variables options on the server
//some imp are:- ['UNIQUE_ID'] , ['HTTP_HOST'] ,['HTTP_CONNECTION']

$filename =$_SERVER["SCRIPT_FILENAME"];

echo("The filename of this file is :$filename<br/>");

$root= $_SERVER['DOCUMENT_ROOT'];
echo("The document where it is running from is : $root<br/>");//gives the locations

$useragent =$_SERVER['HTTP_USER_AGENT'];
echo("tHE Name of the client is : $useragent<br/>");