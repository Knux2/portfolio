<?php

require '../editMeFunctions.php';

use PHPUnit\Framework\Testcase;

class StackTest extends Testcase
{

    public function testGetParagraphSuccess()
    {
        $expected = '<option value=>This is a Paragraph</option>';
        $input = [['paragraph'=>'This is a Paragraph']];
        $case = getParagraph($input);
        $this->assertEquals($expected, $case);
    }

    public function testGetParagraphFailure()
    {
        $expected = '<option value=></option>';
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

    public function testhiddenInputSuccess()
    {
        $expected = '<input type="hidden" name="newId" value="3">';
        $input = 3;
        $case = hiddenInput($input);
        $this->assertEquals($expected, $case);
    }

    public function testhiddenInputFailure()
    {
        $expected = '<input type="hidden" name="newId" value="123">';
        $input = '123ABC';
        $case = hiddenInput($input);
        $this->assertEquals($expected, $case);
    }

    public function testhiddenInputMalformedString()
    {
        $input = 'This is a Paragraph';
        $this->expectException(TypeError::class);
        hiddenInput($input);
    }

    public function testhiddenInputMalformedArray()
    {
        $input = [];
        $this->expectException(TypeError::class);
        hiddenInput($input);
    }
}