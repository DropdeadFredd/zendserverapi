<?php

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * test case.
 */
class CodetracingTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        if(DISABLE_REAL_INTERFACE === true)
            $this->markTestSkipped();
    }
    
    public function testCodetracingEnableDisable()
    {
        \ZendServerAPI\Startup::enableLogging();
        $codetracing = new \ZendServerAPI\Codetracing("example62");
        $status = $codetracing->codetracingDelete("0.8580.1");
        \ZendServerAPI\Startup::disableLogging();
    }
}

