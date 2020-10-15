<?php

//$con = new mysqli("servidor","USER DBA","NAME DBA");
$Rosa = NEW mysqli("localhost","root","","dba");

if ($Rosa) {
	echo "bien conectado";
}else{
	echo "mal conectado";
}

?>