<?php

use PHPUnit\Framework\TestCase;

require('../profileFunctions.php');

class StackTest extends TestCase
{

/*****************************
Testing outputProfileText()
 *****************************/

// success test - check if outputProfileTextSuccess() returns a string
public function testoutputProfileTextSuccessArray()
{
    $textArray = ['text' => 'Test text 1'];
    $case = outputProfileText($textArray);
    $this->assertInternalType('string', $case);
}

// success - check that outputProfileTextSuccess() contains word it should
public function testoutputProfileTextSuccessValue()
{
    $textArray = ['text' => 'success'];
    $case = outputProfileText($textArray);
    $this->assertEquals('success', $case);
}

// malformed test - give outputProfileTextSuccess() a string and prime it to expect an exception
public function testoutputProfileTextMalformed()
{
    $textArray = 'string pretending to be an array';
    $this->expectException(TypeError::class);
    outputProfileText($textArray);
}

/*****************************
Testing outputProfileEmail()
 *****************************/

// success test - check if outputProfileEmailSuccess() returns a string
public function testoutputProfileEmailSuccessArray()
{
    $emailArray = ['email' => 'testemail@test.com'];

    $case = outputEmail($emailArray);
    $this->assertInternalType('string', $case);
}

// success - check that outputProfileEmailSuccess() starts with correct prefix
public function testoutputProfileEmailSuccessValue()
{
    $emailArray = ['email' => 'kob123@hotmail.co.uk'];
    $case = outputEmail($emailArray);
    $this->assertStringStartsWith('kob123', $case);
}

// malformed test - give outputProfileEmailSuccess() a string and prime it to expect an exception
    public function testoutputEmailMalformed()
    {
        $emailArray = 'string pretending to be an array';
        $this->expectException(TypeError::class);
        outputEmail($emailArray);
    }


}