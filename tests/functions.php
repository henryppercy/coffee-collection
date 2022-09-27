<?php
require_once '../functions.php';
use PHPUnit\Framework\TestCase;

class functions extends TestCase
{
    public function test_generateCard_givenArray()
    {
        $input = [[
            'country' => 'Test',
            'name' => 'Test',
            'process' => 'Test',
            'altitude' => 'Test',
            'descriptors_one' => 'Test',
            'descriptors_two' => 'Test',
            'descriptors_three' => 'Test'
            ]];
        $expected =
            '<div class="card">
        <div class="card-image">
            <h3>Test</h3>
            <h1>Test</h1>
            <hr>
            <h2>Test</h2>
            <h4>Testm</h4>
        </div>
        <div class="descriptors">
            <p class="descriptor">Test</p>
            <p class="descriptor">Test</p>
            <p class="descriptor">Test</p> 
        </div>           
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
    public function test_generateCard_emptyArray()
    {
        $input = [];
        $this->expectException(Exception::class);
        $this->expectErrorMessage('No data from database');
        $result = generateCard($input);
    }
    public function test_generateCard_noValueSetInArray()
    {
        $input = [[
            'name' => '',
            'process' => '',
            'altitude' => '',
            'descriptors_one' => '',
            'descriptors_two' => '',
            'descriptors_three' => ''
        ]];
        $this->expectException(Exception::class);
        $this->expectErrorMessage('No value has been set');
        $result = generateCard($input);
    }
}