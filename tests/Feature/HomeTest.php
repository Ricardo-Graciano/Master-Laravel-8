<?php

namespace Tests\Feature;
use Tests\TestCase;

class HomeTest extends TestCase
{
    public function testHomePageIsWorkingCorrectly()
    {
        $response = $this->get('/');

        $response->assertSeeText('Hello world!');
        $response->assertSeeText('The current value is 0');
    }

    public function testContactPageIsWorkingCorrectly(){
        $response = $this->get('/contact');

        $response->assertSeeText('Contact page');
    }
}
