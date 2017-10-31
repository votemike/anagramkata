<?php namespace Votemike\Anagram;

class Anagram
{
    public static function isAnagram(string $word1, string $word2): bool
    {
        $word1Chars = str_split($word1);
        $word2Chars = str_split($word2);
        sort($word1Chars);
        sort($word2Chars);



        return $word1Chars == $word2Chars;
    }
}