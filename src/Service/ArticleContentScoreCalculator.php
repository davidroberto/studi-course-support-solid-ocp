<?php


namespace App\Service;


use App\Entity\Article;

class ArticleContentScoreCalculator implements ArticleScoreCalculatorInterface
{
    public function calculateScore(Article $article, float $score): float
    {
        if (strlen($article->getContent()) > 75) {
            $score += 3;
        } else if (strlen($article->getContent() > 50)) {
            $score += 2;
        } else if (strlen($article->getContent() > 25)) {
            $score += 1;
        }

        return $score;
    }
}
