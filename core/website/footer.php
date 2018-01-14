<?php

$Footer_File = file(ACTIVATED_THEME.'footer.html');
$FootContent = join("", $Footer_File);
$FooterContent = preg_replace_callback("/{{(.*?)}}/","replace_engine", $FootContent);

print $FooterContent;
?>