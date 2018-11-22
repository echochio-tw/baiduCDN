<?php

include 'BaiduBce.phar';
require 'CdnConf.php';

use BaiduBce\Services\Cdn\CdnClient;
use BaiduBce\BceClientConfigOptions;
use BaiduBce\Log\LogFactory;

class CdnClientTest
{

    protected $config = '';
    protected $client = null;
    protected $logger = null;

    public function __construct()
    {
        global $g_CDN_TEST_CONFIG;
        $this->config = $g_CDN_TEST_CONFIG;
        $this->client = new CdnClient($this->config);
        $this->logger = LogFactory::getLogger(get_class($this));
    }

    /**
     *  create domain
     */
    public function setUpBeforeClass($domain, $origins)
    {
        $origins = array(
            array("peer" => "$origins"),
        );
        $this->client->createDomain($domain, $origins);


    }

      //  delete domain
    public function tearDownAfterClass($domain)
    {
        $this->client->deleteDomain($domain);
    }

      //  List domain
    public function testListDomain($domain)
    {
        $this->client->listDomain($domain);
    }

    /**
     *  stop domain
     */
    public function DisableDomain($domain)
    {
        $this->client->disableDomain($domain);
    }
    

}