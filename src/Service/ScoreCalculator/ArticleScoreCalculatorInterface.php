<?php


namespace App\Service\ScoreCalculator;


use App\Entity\Article;

interface ArticleScoreCalculatorInterface
{
    public function calculateScore(Article $article, float $score): float;
}
