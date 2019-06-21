<?php
$a = "
Browser doesn't support offline: {$_POST['userAgent']}
";
if(mail('caleb@mathmammoth.com', 'Offline support not supported', $a,'maria_miller@mathmammoth.com')) echo 'Success!';
?>
