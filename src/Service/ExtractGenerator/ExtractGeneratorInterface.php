<?php


namespace App\Service\ExtractGenerator;


use App\Entity\Article;

interface ExtractGeneratorInterface
{
    public function generateExtract(Article $article): string;
}
