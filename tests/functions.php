<?php
require_once '../functions.php';
use PHPUnit\Framework\TestCase;

class functions extends TestCase
{
    public function test_generateCard_givenArray()
    {
        // Arrange
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

        // Act --> performing the unit that is under test
        $result = generateCard($input);
        // Assert --> Compare the expected result to the actual result
        $this->assertEquals($expected, $result);
    }
    public function test_generateCard_givenInt()
    {
        // Arrange
        $input = 1;
        $this->expectException(TypeError::class);

        // Act --> performing the unit that is under test
        $result = generateCard($input);
    }
}