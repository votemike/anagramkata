<?php namespace Votemike\Anagram;

class Anagram
{
    public static function isAnagram(string $word1, string $word2): bool
    {
        if (strlen($word1) !== strlen($word2)) {
            return false;
        }

        if ($word1 === $word2) {
            return true;
        }

        $word1Letters = str_split($word1);
        $word2Letters = str_split($word2);

        $letters = [];

        foreach ($word1Letters as $letter) {
            if (!isset($letters[$letter])) {
                $letters[$letter] = 0;
            }

            $letters[$letter] += 1;
        }

        foreach ($word2Letters as $letter) {
            if (!isset($letters[$letter])) {
                return false;
            }

            $letters[$letter] -= 1;

            if ($letters[$letter] === 0) {
                unset($letters[$letter]);
            }
        }

        return empty($letters);
    }
}
