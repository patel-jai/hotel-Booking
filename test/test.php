<?php

use PHPUnit\Framework\TestCase;

require 'homepagelogic.php';

class test extends TestCase
{
    public function testSomething()
    {     
        $expectedTitle = "Hotel Booking Management System";
        $this->assertEquals($expectedTitle, getTitle());
    }
}

