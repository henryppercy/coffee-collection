<?php
require_once '../functions.php';
use PHPUnit\Framework\TestCase;

class functions extends TestCase
{
    public function test_generateCard_givenArray()
    {
        $input = [[
            'country' => 'test',
            'name' => 'test',
            'process' => 'test',
            'altitude' => 'test',
            'descriptor_one' => 'test',
            'descriptor_two' => 'test',
            'descriptor_three' => 'test',
            'image' => 'images/coffee-1.png'
        ]];
        $expected =
            '<div class="card">'
            . '<div class="card-box">'
            . '<img class="card-image" src="images/coffee-1.png" alt="Stock image of coffee farm">'
            . '<div class="card-text">'
            . '<h3>test</h3>'
            . '<h1>test</h1>'
            . '<hr>'
            . '<h2>test</h2>'
            . '<h4>testm</h4>'
            . '</div>'
            . '</div>'
            . '<div class="descriptors">'
            . '<p class="descriptor green-bg-highlight">test</p>'
            . '<p class="descriptor brown-bg-highlight">test</p>'
            . '<p class="descriptor red-bg-highlight card-bottom">test</p>'
            . '</div>'
            . '</div>';

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

    public function test_generateOriginOptions_givenArray()
    {
        $input = [[
            'id' => 'test',
            'country' => 'test'
        ]];
        $expected = '<option value="test">test</option>';
        $result = generateOriginOptions($input);
        $this->assertEquals($expected, $result);
    }

    public function test_generateOriginOptions_givenInt()
    {
        $input = 1;
        $this->expectException(TypeError::class);
        $result = generateOriginOptions($input);
    }

    public function test_generateOriginOptions_emptyArray()
    {
        $input = [];
        $this->expectException(Exception::class);
        $this->expectErrorMessage('No data from database');
        $result = generateOriginOptions($input);
    }

    public function test_generateProcessOptions_givenArray()
    {
        $input = [[
            'id' => 'test',
            'process' => 'test'
        ]];
        $expected = '<option value="test">test</option>';
        $result = generateProcessOptions($input);
        $this->assertEquals($expected, $result);
    }

    public function test_generateProcessOptions_givenInt()
    {
        $input = 1;
        $this->expectException(TypeError::class);
        $result = generateProcessOptions($input);
    }

    public function test_generateProcessOptions_emptyArray()
    {
        $input = [];
        $this->expectException(Exception::class);
        $this->expectErrorMessage('No data from database');
        $result = generateProcessOptions($input);
    }

    public function test_sanitiseFormData_givenArrayWhitespace()
    {
        $input = [
            'key' => '   Value     ',
        ];
        $expected = [
            'key' => 'Value',
        ];
        $result = sanitiseFormData($input);
        $this->assertEquals($expected, $result);
    }

    public function test_sanitiseFormData_givenArrayHTML()
    {
        $input = [
            'key' => '<div>Test</div>'
        ];
        $expected = [
            'key' => '&lt;div&gt;Test&lt;/div&gt;'
        ];
        $result = sanitiseFormData($input);
        $this->assertEquals($expected, $result);
    }

    public function test_sanitiseFormData_givenArrayEmpty()
    {
        $input = [];
        $expected = [];
        $result = sanitiseFormData($input);
        $this->assertEquals($expected, $result);
    }

    public function test_sanitiseFormData_givenInt()
    {
        $input = 1;
        $this->expectException(TypeError::class);
        $result = sanitiseFormData($input);
    }
}