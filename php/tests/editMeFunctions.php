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

    public function testGetParagraphMalformed()
    {
        $input = 101;
        $this->expectException(TypeError::class);
        getParagraph($input);
    }

    public function testGetParagraphMalformed2()
    {
        $input = 'This is a Paragraph';
        $this->expectException(TypeError::class);
        getParagraph($input);
    }

    public function hiddenInputSuccess()
    {
        $expected = '<option value=>This is a Paragraph</option>';
        $input = [['paragraph'=>'This is a Paragraph']];
        $case = hiddenInput($input);
        $this->assertEquals($expected, $case);
    }

    public function hiddenInputFailure()
    {
        $expected = '<option value=></option>';
        $input = [['paragraph'=>'']];
        $case = hiddenInput($input);
        $this->assertEquals($expected, $case);
    }

    public function hiddenInputMalformed()
    {
        $input = 101;
        $this->expectException(TypeError::class);
        hiddenInput($input);
    }

    public function hiddenInputMalformed2()
    {
        $input = 'This is a Paragraph';
        $this->expectException(TypeError::class);
        hiddenInput($input);
    }
}