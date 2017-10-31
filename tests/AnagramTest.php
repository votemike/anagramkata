<?php namespace Tests;

use PHPUnit\Framework\TestCase;
use Votemike\Anagram\Anagram;

/**
 * Wow! You opened the test file
 * 10 points to you!
 */
class AnagramTest extends TestCase
{
    public function testIsAnagram()
    {
        $this->assertTrue(Anagram::isAnagram('a', 'a'));
        $this->assertTrue(Anagram::isAnagram('racecar', 'racecar'));
        $this->assertTrue(Anagram::isAnagram('doctorwho', 'torchwood'));
    }

    public function testIsNotAnagram()
    {
        $this->assertFalse(Anagram::isAnagram('a', 'b'));
    }

    public function testDuplicateCharacters()
    {
        $this->assertFalse(Anagram::isAnagram('a', 'aa'));
        $this->assertFalse(Anagram::isAnagram('abb', 'aab'));
    }
}