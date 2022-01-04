<?php


namespace App\Service\ExtractGenerator;


use App\Entity\Article;

class FirewallExtractGenerator implements ExtractGeneratorInterface
{

    public function generateExtract(Article $article): string
    {
        return substr($article->getContent(), 0, 20). " <== Payer pour voir la suite (espèce de radin) ==>";
    }


}
