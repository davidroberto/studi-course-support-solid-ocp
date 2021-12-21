<?php


namespace App\Service;


use App\Entity\Article;

interface ArticleScoreCalculatorInterface
{
    public function calculateScore(Article $article, float $score): float;
}
