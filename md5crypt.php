<?php 
/* Coded by Weedatae. */

if(isset($argv[1])) {
	echo "\n Password : $argv[1] | Password MD5 : " . md5($argv[1]) . "\n";
}
else {
	echo "Command : php $argv[0] PASSWORD";
}
?>