<?php


namespace App\Service;


use App\Entity\Article;

class ArticleTitleScoreCalculator implements ArticleScoreCalculatorInterface
{
    public function calculateScore(Article $article, float $score): float
    {
        if (strlen($article->getTitle()) > 15) {
            $score += 3;
        } else if (strlen($article->getTitle() > 10)) {
            $score += 2;
        } else if (strlen($article->getTitle() > 5)) {
            $score += 1;
        }

        return $score;
    }

}
