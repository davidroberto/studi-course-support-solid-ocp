<?php


namespace App\Service;


use App\Entity\Article;
use App\Entity\Category;

class EntityView
{

    public function displayTitle($class)
    {
        if ($class instanceof Article) {
            return '<h1> Le titre de l\'article est : '.$class->getTitle(). '</h1>';
        } else if ($class instanceof Category) {
            return '<h1> Le titre de la catégorie est : '.$class->getName(). '</h1>';
        }
    }

}
