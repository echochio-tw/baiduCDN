<?php

include 'CdnClientTest.php';

// main
$sDomain = $argv[1];

$oCDN = new CdnClientTest();
$oCDN->DisableDomain($sDomain);

?>
