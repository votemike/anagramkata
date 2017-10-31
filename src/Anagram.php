<?php namespace Votemike\Anagram;

class Anagram
{
    public static function isAnagram(string $word1, string $word2): bool
    {
        // crate an array of letters occurrences
        $countWord1Letters = [];
        $countWord2Letters = [];

        $length = mb_strlen($word1);
        for ($i = 0; $i < $length; $i++) {
            // skip spaces
            if ($word1[$i] === ' ') {
                continue;
            }
            @$countWord1Letters[$word1[$i]]++;
        }

        $length = mb_strlen($word2);
        for ($i = 0; $i < $length; $i++) {
            // skip spaces
            if ($word2[$i] === ' ') {
                continue;
            }
            @$countWord2Letters[$word2[$i]]++;
        }

        // check if both arrays are the same, this mean both words are using exactly same letters the same amount of times
        if (empty(array_diff_assoc($countWord1Letters, $countWord2Letters))) {
            return true;
        }

        return false;
    }
}