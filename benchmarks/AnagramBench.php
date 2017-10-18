<?php

use Votemike\Anagram\Anagram;

class AnagramBench
{
    /**
     * @Iterations(5)
     * @Revs(500)
     */
    public function benchShortAnagram()
    {
        Anagram::isAnagram('a', 'a');
    }

    /**
     * @Iterations(5)
     * @Revs(500)
     */
    public function benchShortNonAnagram()
    {
        Anagram::isAnagram('a', 'b');
    }

    /**
     * @Iterations(5)
     * @Revs(500)
     */
    public function benchLongAnagram()
    {
        Anagram::isAnagram('qazwsxedcrfvtgbyhnujmikolp', 'azwsxedcrfvtgbyhnujmikolpq');
    }

    /**
     * @Iterations(5)
     * @Revs(500)
     */
    public function benchLongNonAnagram()
    {
        Anagram::isAnagram('qazwsxedcrfvtgbyhnujmikolp', 'azwsxedcrfvtgbyhnujmikolpa');
    }
}