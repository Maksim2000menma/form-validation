<?php

namespace Tests\Unit;

use Tests\TestCase;

class MessageControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCorrect()
    {
        $response = $this->call('POST', 'message', array(
            'email' => 'sports_on@mail.ru',
            'name' => 'Maksim',
            'siteUrl' => 'https://sports-on.ru',
            'technology[1]' => '1'
        ));
    
        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testWhitespace()
    {
        $response = $this->call('POST', 'message', array(
            'email' => '   sports_on@mail.ru',
            'name' => 'MAKSIM ',
            'siteUrl' => 'https://sports-on.ru ',
            'technology[1]' => ' 1   '
        ));

        $this->assertEquals(200, $response->getStatusCode());
    }

    public function testWithoutRequredField()
    {
        $response = $this->call('POST', 'message', array(
            'email' => 'sports_on@mail.ru',
            'name' => 'Maksim',
            'technology[1]' => '1'
        ));
        
        $this->assertEquals(302, $response->getStatusCode());
    }

    public function testBadParams()
    {
        $response = $this->call('POST', 'message', array(
            'email' => 'sports_on',
            'name' => '234234',
            'siteUrl' => 'ports-on.ru',
            'technology[1]' => 'text'
        ));
    
        $this->assertEquals(302, $response->getStatusCode());
    }
}
