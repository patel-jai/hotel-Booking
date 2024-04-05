<?php

use PHPUnit\Framework\TestCase;

require 'homepage.php';

class test extends TestCase
{
    public function testSomething()
    {     
        $expectedTitle = "Hotel Booking Management System";
        $this->assertEquals($expectedTitle, getTitle());
    }
}

