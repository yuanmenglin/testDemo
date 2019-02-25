<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/26 0026
 * Time: 9:35
 */

namespace MyGreeter;


class Client
{
    public function getGreeting()
    {
        $_now = time();
        $hour = date('H', $_now);
        if ($hour >= 0 || $hour < 12){
            return 'Good morning';
        } elseif ($hour >= 12 || $hour < 18){
            return 'Good afternoon';
        } else {
            return 'Good evening';
        }
    }
}