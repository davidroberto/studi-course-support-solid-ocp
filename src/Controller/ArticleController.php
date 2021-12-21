<?php


namespace App\Controller;


use App\Repository\ArticleRepository;
use App\Service\ArticleScoreCalculator;
use App\Service\DotsExtractGenerator;
use App\Service\EntityView;
use App\Service\ExtractGeneratorInterface;
use App\Service\SeeMoreExtractGenerator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{

    /**
     * @var ExtractGeneratorInterface
     */
    private $extractGenerator;

    public function __construct(ExtractGeneratorInterface $extractGenerator)
    {
        $this->extractGenerator = $extractGenerator;
    }


    /**
     * @Route("/article/{id}/extract", name="show_article_extract")
     */
    public function showExtractArticle($id, ArticleRepository $articleRepository, EntityManagerInterface $entityManager)
    {
        $article = $articleRepository->find($id);
        $extract = $this->extractGenerator->generateExtract($article);

        dd($extract);
    }


}
