<?php

use PHPUnit\Framework\TestCase;

require('../profileFunctions.php');

class StackTest extends TestCase
{

// success test - check if outputProfileTextSuccess() returns a string
public function testoutputProfileTextSuccessArray()
{
    $textArray = ['text' => 'Test text 1'];
    $case = outputProfileText($textArray);
    $this->assertInternalType('string', $case, $message = 'Error: Not expected data type');
}

// success - check that outputProfileTextSuccess() contains word it should
public function testoutputProfileTextSuccessValue()
{
    $textArray = ['text' => 'I am currently a trainee full-stack Web developer at Mayden Academy in Bath. 
    Before starting the course I worked for 10 years as a Technical Writer and documentation Project Manager 
    at various companies, including Visa and Nokia. My interest in Web development was first piqued when I 
    looked into creating my own website for freelance technical writing work. I quickly discovered a wealth 
    of online tutorials and resources and found that I was really enjoying learning to code and create websites. 
    I realised I wanted to make a career change into Web development and continued studying in my spare time before 
    applying to Mayden Academy. I love both the analytical, problem-solving side of coding, and the more creative 
    aspects of Web design. UI/UX also interests me greatly as technical writing taught me to focus on the end-user 
    experience. I am looking forward to getting my first job as a Web developer, deepening and expanding my skill set 
    and getting more involved in the Bath/Bristol tech community. I am currently a trainee full-stack Web developer 
    at Mayden Academy in Bath. Before starting the course I worked for 10 years as a Technical Writer and documentation 
    Project Manager at various companies, including Visa and Nokia. My interest in Web development was first piqued 
    when I looked into creating my own website for freelance technical writing work. I quickly discovered a wealth of 
    online tutorials and resources and found that I was really enjoying learning to code and create websites. I realised 
    I wanted to make a career change into Web development and continued studying in my spare time before applying to 
    Mayden Academy. I love both the analytical, problem-solving side of coding, and the more creative aspects of Web 
    design. UI/UX also interests me greatly as technical writing taught me to focus on the end-user experience. I am 
    looking forward to getting my first job as a Web developer, deepening and expanding my skill set and getting more 
    involved in the Bath/Bristol tech community.'];
    $case = outputProfileTextSuccess($textArray);
    $this->assertNotContains('developer', $case);
}

// success - check if number of elements in array is as expected
//public function testoutputProfileTextSuccessCount()
//{
//    $textArray = ['text' => 'Test text 1', 'text' => 'Test text 2'];
//    $case = outputProfileText($textArray);
//    $this->assertCount(1, $case, $message = 'Error: more than 1 string passed to function');
//}

// malformed test - give outputProfileTextSuccess() a string and prime it to expect an exception
public function testoutputProfileTextMalformed ()
{
    $textArray = 'string pretending to be an array';
    $this->expectException(TypeError::class);
    $case = outputProfileText($textArray);
}

// success test - check if outputProfileEmailSuccess() returns a string
public function testoutputProfileEmailSuccessArray()
{
    $emailArray = ['email' => 'testemail@test.com'];

    $case = outputEmail($emailArray);
    $this->assertInternalType('string', $case, $message = 'Error: Not expected data type');
}

}