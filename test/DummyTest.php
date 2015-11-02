<?php

namespace VendorTest\Component;

use PHPUnit_Framework_TestCase as TestCase;
use Vendor\Component\Dummy;

class DummyTest extends TestCase
{
    private $dummy;

    protected function setUp()
    {
        $this->dummy = new Dummy;
    }

    public function testDummy()
    {
        $this->assertInstanceOf(Dummy::class, $this->dummy);
    }
}
