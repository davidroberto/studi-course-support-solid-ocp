<?php


namespace App\Service;


use App\Entity\Article;

class ArticleNbLecturesScoreCalculator implements ArticleScoreCalculatorInterface
{
    public function calculateScore(Article $article, float $score): float
    {
        if (strlen($article->getNbLectures()) > 30) {
            $score += 3;
        } else if (strlen($article->getNbLectures() > 20)) {
            $score += 2;
        } else if (strlen($article->getNbLectures() > 10)) {
            $score += 1;
        }

        return $score;
    }

}
