<?php


namespace App\Controller;


use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use App\Repository\TagRepository;
use App\Service\ArticleScoreCalculator;
use App\Service\EntityView;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{

    /**
     * @Route("/article/{id}", name="article")
     */
    public function article($id, ArticleRepository $articleRepository)
    {
        $article = $articleRepository->find($id);

        $entityView = new EntityView();
        $view = $entityView->displayTitle($article);

        return new Response($view);
    }

    /**
     * @Route("/category/{id}", name="category")
     */
    public function category($id, CategoryRepository $categoryRepository)
    {
        $category = $categoryRepository->find(1);

        $entityView = new EntityView();

        $view = $entityView->displayTitle($category);

        return new Response($view);
    }


}
