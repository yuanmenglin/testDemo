<?php
namespace MyGreeter;

class Client
{
    //之前没用过单元测试  不是很明白题目的意思
    public function getGreeting()
    {
        $_now = time();
        $hour = date('H', $_now);
        if ($hour > 0 && $hour < 12){
            return 'Good morning';
        } elseif ($hour > 0 && $hour < 12){
            return 'Good afternoon';
        } else {
            return 'Good evening';
        }
    }
}