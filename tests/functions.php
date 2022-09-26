<?php
require_once '../functions.php';
use PHPUnit\Framework\TestCase;

class functions extends TestCase
{
    public function test_generateCard_givenArray()
    {
        $input = [[
            'country' => 'Hello',
            'name' => 'Hello',
            'process' => 'Hello',
            'altitude' => 'Hello',
            'descriptors' => 'Hello'
            ]];
        $expected = '<div class="card">
            <div class="card-image">
                <h3>Hello</h3>
                <h1>Hello</h1>
                <hr>
                <h2>Hello</h2>
                <h4>Hellom</h4>
            </div>
            <p>Hello</p>
        </div>';

        $result = generateCard($input);

        $this->assertEquals($expected, $result);
    }
    public function test_generateCard_givenInt()
    {
        $input = 1;
        $this->expectException(TypeError::class);

        $result = generateCard($input);
    }
}