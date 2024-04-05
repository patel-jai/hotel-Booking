<?php

use PHPUnit\Framework\TestCase;

class test extends TestCase
{
    public function testSomething()
    {     
        ob_start();
        include 'homepage.php';
        $output = ob_get_clean();
        $this->assertStringContainsString('<title>Hotel Booking Management System</title>', $output);
    }
}

