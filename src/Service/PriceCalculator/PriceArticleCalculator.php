<?php


namespace App\Service\PriceCalculator;


use App\Entity\Article;

class PriceArticleCalculator implements PriceArticleCalculatorInterface
{
    public function calculatePrice(Article $article): float
    {
        return strlen($article->getContent()) * 0.005;
    }
}
