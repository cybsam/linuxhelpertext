
<?php

$hashtext = readline("Enter your plain password: ");
$hashfile = password_hash($hashtext,PASSWORD_DEFAULT);

echo "your hash: ".$hashfile;

?>
