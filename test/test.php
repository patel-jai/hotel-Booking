<?php

use PHPUnit\Framework\TestCase;

require 'homepage.php';
require 'booking.php';

class TestHomePage extends TestCase
{
    public function testHomePageTitle()
    {     
        $expectedTitle = "Hotel Booking Management System";
        $this->assertEquals($expectedTitle, getTitle());
    }
}

class TestBookingPage extends TestCase
{
    public function testBookingPageTitle()
    {     
        $expectedTitle = "Hotel Booking Management System";
        $this->assertEquals($expectedTitle, getTitle1());
    }
}


