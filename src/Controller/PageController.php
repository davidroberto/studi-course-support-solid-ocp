<?php


namespace App\Controller;


use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use App\Repository\GenreRepository;
use App\Repository\TagRepository;
use App\Service\ArticleScoreCalculator;
use App\Service\EntityView;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/category/{id}", name="category")
     */
    public function category($id, CategoryRepository $categoryRepository)
    {
        $category = $categoryRepository->find($id);

        $entityView = new EntityView();
        $view = $entityView->displayTitle($category);

        return new Response($view);
    }

    /**
     * @Route("/tag/{id}", name="tag")
     */
    public function tag($id, TagRepository $tagRepository)
    {
        $tag = $tagRepository->find($id);

        $entityView = new EntityView();
        $view = $entityView->displayTitle($tag);

        return new Response($view);
    }

    /**
     * @Route("/genre/{id}", name="genre")
     */
    public function genre($id, GenreRepository $genreRepository)
    {
        $genre = $genreRepository->find($id);

        $entityView = new EntityView();
        $view = $entityView->displayTitle($genre);

        return new Response($view);
    }

    /**
     * @Route("/article/{id}/score", name="article_score")
     */
    public function scoreArticle($id, ArticleRepository $articleRepository, ArticleScoreCalculator $articleScoreCalculator)
    {
        $article = $articleRepository->find($id);
        $scoreAverage = $articleScoreCalculator->calculateScore($article);

        return new Response($scoreAverage);
    }

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



}
