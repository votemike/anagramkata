<?php namespace Votemike\Anagram;

class Anagram
{
    public static function isAnagram(string $word1, string $word2): bool
    {
        if (strlen($word1) !== strlen($word2)) {
            return false;
        }

        $length = strlen($word1);

        $word1 = strtoupper($word1);
        $word2 = strtoupper($word2);

        $firstWord = [];
        $secondWord = [];

        for ($i = 0; $i < $length; $i++) {
            $firstWord[$i] = ord(substr($word1, $i, 1));
            $secondWord[$i] = ord(substr($word2, $i, 1));
        }

        sort($firstWord);
        sort($secondWord);

        for ($i = 0; $i < $length; $i++) {
            if ($firstWord[$i] !== $secondWord[$i]) {
                return false;
            }
        }

        return true;
    }
}