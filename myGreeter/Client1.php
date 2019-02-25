<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/26 0026
 * Time: 9:52
 */

namespace MyGreeter;

use PhpParser\Builder\Interface_;

Interface greeter
{
    public function getGreeting();
}

class Morning implements greeter
{
    public function getGreeting()
    {
        // TODO: Implement getGreeting() method.
        return 'Good Morning';
    }
}

class Afternoon implements greeter
{
    public function getGreeting()
    {
        // TODO: Implement getGreeting() method.
        return 'Good Afternoon';
    }
}

class Evening implements greeter
{
    public function getGreeting()
    {
        // TODO: Implement getGreeting() method.
        return 'Good Evening';
    }
}

class Client1 implements greeter
{
    public $client;

    public function __construct($time = '')
    {
        if (!$time){
            $time = time();
        }
        $hour = date('H', $time);
        if ($hour >= 0 || $hour < 12){
            $this->client = new Morning();
        } elseif ($hour >= 12 || $hour < 18){
            $this->client = new Afternoon();
        } else {
            $this->client = new Evening();
        }
    }

    public function getGreeting()
    {
        return $this->client->getGreeting();
    }
}