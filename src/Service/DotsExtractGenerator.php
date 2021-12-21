<?php


namespace App\Service;

// doit générer un extrait de l'article et lui ajouter "..."
use App\Entity\Article;

class DotsExtractGenerator implements ExtractGeneratorInterface
{
    public function generateExtract(Article $article): string
    {
        return substr($article->getContent(), 0, 30). "...";
    }
}
