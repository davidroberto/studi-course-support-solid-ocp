<?php


namespace App\Service\ExtractGenerator;


use App\Entity\Article;

class SeeMoreExtractGenerator implements ExtractGeneratorInterface
{
    public function generateExtract($article): string
    {
        return substr($article->getContent(), 0, 20). " <- VOIR PLUS ->";
    }

    public function calculatePrice(Article $article): float
    {
        return 0;
    }
}
