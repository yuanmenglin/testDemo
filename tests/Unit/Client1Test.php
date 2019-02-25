<?php
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

require_once '../../myGreeter/Client1.php';

class Client1Test extends TestCase
{
    public $greeter;

    public function setUp()
    {
        $this->greeter = new \MyGreeter\Client1();
    }
    public function test_Instance()
    {
        $this->assertEquals(
            get_class($this->greeter),
            'MyGreeter\Client1'
        );
    }
    public function test_getGreeting()
    {
        $this->assertTrue(
            strlen($this->greeter->getGreeting()) > 0
        );
    }

    public function test_getGreeting1()
    {
        if (get_class($this->greeter->client) == 'Morning') {
            $this->assertEquals(
                $this->greeter->getGreeting(),
                'Good Morning'
            );
        } elseif (get_class($this->greeter->client) == 'Morning') {
            $this->assertEquals(
                $this->greeter->getGreeting(),
                'Good Morning'
            );
        } else {
            $this->assertEquals(
                $this->greeter->getGreeting(),
                'Good Morning'
            );
        }
    }
}
