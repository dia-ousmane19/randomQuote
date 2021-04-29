<?php

namespace RandomQuote;

class RandomQuote
{
    public function getRandomQuote()
    {
        $jsonFile = file_get_contents(dirname(__DIR__) . '/assets/quote.json');
        $quote = json_decode($jsonFile, true);
        $index = mt_rand(0, count($quote));

        return $quote[$index];
    }
    public function generate()
    {
        return $this->getRandomQuote();
    }
}
