<?php

use PHPUnit\Framework\TestCase;

require('../profileFunctions.php');

class StackTest extends TestCase
{

// success test - check if function outputs a string
public function testoutputProfileTextSuccessArray()
{
    $textArray = ['text' => 'Test text 1'];

    $case = outputProfileText($textArray);
    $this->assertInternalType('string', $case, $message = 'Error: Not expected data type');
}

// failure test - check if passing 2 arrays makes it fail
//public function testoutputProfileTextFailureCount()
//{
//    $textArray = [
//        ['text' => 'Test text 1'],
//        ['text2' => 'Test text 2']
//    ];
//    $case = outputProfileText($textArray);
//    $this->assertCount(2, $case, $message = 'Error: more than 1 array passed to function');
//}

// malformed test - give it an empty array and prime it to expect an exception


}