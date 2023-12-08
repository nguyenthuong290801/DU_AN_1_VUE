<?php

use Phpml\FeatureExtraction\StopWords\English;
use Phpml\Tokenization\WhitespaceTokenizer;
use Phpml\FeatureExtraction\TfIdfTransformer;
use Phpml\FeatureExtraction\TokenCountVectorizer;

class DataFilter
{
    protected $vectorizer;
    protected $transformer;
    protected $stopWords;

    public function __construct($tokenizer, $stopWords)
    {
        $this->vectorizer = new TokenCountVectorizer($tokenizer);
        $this->transformer = new TfIdfTransformer();
        $this->stopWords = $stopWords;
    }

    public function filterData($data)
    {
        if (!is_array($data) || empty($data)) {
            throw new InvalidArgumentException('Invalid input data.');
        }

        $filteredData = $this->preprocessData($data);
        $vectorizedData = $this->vectorizer->transform($filteredData);
        $transformedData = $this->transformer->transform($vectorizedData);

        return $transformedData;
    }

    protected function preprocessData($data)
    {
        $stopWords = $this->stopWords;

        $filteredData = array_map(function ($text) use ($stopWords) {
            return implode(' ', $stopWords->remove($this->tokenizeText($text)));
        }, $data);

        return $filteredData;
    }

    protected function tokenizeText($text)
    {
        $tokenizer = $this->vectorizer->getTokenizer();
        return $tokenizer->tokenize($text);
    }
}
