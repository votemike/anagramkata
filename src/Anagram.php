<?php namespace Votemike\Anagram;

class Anagram
{
    public static function isAnagram(string $word1, string $word2): bool
    {
        if ($word1 === $word2) {
            return true;
        }

        if (strlen($word1) !== strlen($word2)) {
            return false;
        }

        $letterCount = [];

        foreach(str_split($word1) as $letter) {
            if(isset($letterCount[$letter])) {
                ++$letterCount[$letter];
            } else {
                $letterCount[$letter] = 1;
            }
        }

        foreach(str_split($word2) as $letter) {
            if (!isset($letterCount[$letter])) {
                return false;
            }
            --$letterCount[$letter];
            if($letterCount[$letter] === 0) {
                unset($letterCount[$letter]);
            }
        }

        return empty($letterCount);
    }
}