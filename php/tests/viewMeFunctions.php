<?php

require '../viewMeFunctions.php';

use PHPUnit\Framework\Testcase;

class StackTest extends Testcase
{

    public function testGetParagraphSuccess()
    {
        $expected = '<h2 class="font1">This is a Paragraph</h2>';
        $input = [['paragraph'=>'This is a Paragraph']];
        $case = getParagraph($input);
        $this->assertEquals($expected, $case);
    }

    public function testGetParagraphFailure()
    {
        $expected = '<h2 class="font1"></h2>';
        $input = [['paragraph'=>'']];
        $case = getParagraph($input);
        $this->assertEquals($expected, $case);
    }

    public function testGetParagraphMalformedInteger()
    {
        $input = 101;
        $this->expectException(TypeError::class);
        getParagraph($input);
    }

    public function testGetParagraphMalformedString()
    {
        $input = 'This is a Paragraph';
        $this->expectException(TypeError::class);
        getParagraph($input);
    }
}