<?php


namespace App\Service;


use App\Entity\Article;

interface ExtractGeneratorInterface
{
    public function generateExtract(Article $article): string;
}
