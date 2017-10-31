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
        Anagram::isAnagram(
            'a',
            'a'
        );
    }

    /**
     * @Iterations(5)
     * @Revs(500)
     */
    public function benchShortNonAnagram()
    {
        Anagram::isAnagram(
            'a',
            'b'
        );
    }

    /**
     * @Iterations(5)
     * @Revs(500)
     */
    public function benchLongSame()
    {
        Anagram::isAnagram(
            'qazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolp',
            'qazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolp'
        );
    }

    /**
     * @Iterations(5)
     * @Revs(500)
     */
    public function benchLongAnagram()
    {
        Anagram::isAnagram(
            'pazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolp',
            'qazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolq'
        );
    }

    /**
     * @Iterations(5)
     * @Revs(500)
     */
    public function benchLongNonAnagram()
    {
        Anagram::isAnagram(
            'qazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolp',
            'qazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolq'
        );
    }

    /**
     * @Iterations(5)
     * @Revs(500)
     */
    public function benchLongNonAnagramOfDifferingLengths()
    {
        Anagram::isAnagram(
            'qazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolp',
            'qazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolpqazwsxedcrfvtgbyhnujmikolp'
        );
    }

    /**
     * @Iterations(5)
     * @Revs(500)
     */
    public function benchLongNonAnagramWhereFirstLetterDoesntExist()
    {
        Anagram::isAnagram(
            'qwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiop',
            'zwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiopqwertyuiop'
        );
    }
}