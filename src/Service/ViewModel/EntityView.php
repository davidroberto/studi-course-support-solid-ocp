<?php


namespace App\Service\ViewModel;


use App\Entity\Article;
use App\Entity\Category;
use App\Entity\Tag;

class EntityView
{

    public function displayTitle($class)
    {
        return '<h1>'.$class->displayTitle().'</h1>';
//        if ($class instanceof Article) {
//            return '<h1> Le titre de l\'article est : '.$class->getTitle(). '</h1>';
//        } else if ($class instanceof Category) {
//            return '<h1> Le titre de la catégorie est : '.$class->getName(). '</h1>';
//        } else if ($class instanceof Tag) {
//            return '<h1> Le titre du tag est : '.$class->getTitle(). '</h1>';
//        }
    }

}
