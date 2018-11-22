<?php

include 'CdnClientTest.php';

// main
$sDomain = $argv[1];
$sOrigins = $argv[2];

$oCDN = new CdnClientTest();
$oCDN->setUpBeforeClass($sDomain, $sOrigins);

?>