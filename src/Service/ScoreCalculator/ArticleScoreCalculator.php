<?php


namespace App\Service\ScoreCalculator;


use App\Entity\Article;

class ArticleScoreCalculator
{

    private $articleScoreCalculators;

    public function __construct(iterable $articleScoreCalculatorCriterias)
    {
        $this->articleScoreCalculators = $articleScoreCalculatorCriterias;
    }

    public function calculateScore(Article $article): float
    {
        $score = 0;

        foreach ($this->articleScoreCalculators as $articleScoreCalculator) {
            $score = $articleScoreCalculator->calculateScore($article, $score);
        }

        $scoreAverage = $score / $this->articleScoreCalculators->count();

        return round($scoreAverage, 2);
    }
}
