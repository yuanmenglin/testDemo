<?php
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

require_once '../../myGreeter/Client.php';

class ClientTest extends TestCase
{
    public $greeter;

    public function setUp()
    {
        $this->greeter = new \MyGreeter\Client();
    }
    public function test_Instance()
    {
        $this->assertEquals(
            get_class($this->greeter),
            'MyGreeter\Client'
        );
    }
    public function test_getGreeting()
    {
        $this->assertTrue(
            strlen($this->greeter->getGreeting()) > 0
        );
    }
}
