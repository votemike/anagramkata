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
        // @TODO DELETE THIS ASSERTION
        $this->assertTrue(Anagram::isAnagram('doctorwho', 'torchwood'));
    }
}