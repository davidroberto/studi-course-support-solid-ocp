<?php


namespace App\Service\PriceCalculator;


use App\Entity\Article;

interface PriceArticleCalculatorInterface
{
    public function calculatePrice(Article $article): float;
}
