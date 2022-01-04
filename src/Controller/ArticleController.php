<?php


namespace App\Controller;


use App\Repository\ArticleRepository;
use App\Service\ExtractGenerator\ExtractGeneratorInterface;
use App\Service\PriceCalculator\PriceArticleCalculatorInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{

    // ISP : Les clients ne doivent pas être forcés de dépendre de méthodes
    // qu'ils n'utilisent pas

    /**
     * @var ExtractGeneratorInterface
     */
    private $extractGenerator;
    /**
     * @var PriceArticleCalculatorInterface
     */
    private $articleCalculator;

    public function __construct(ExtractGeneratorInterface $extractGenerator, PriceArticleCalculatorInterface $articleCalculator)
    {
        $this->extractGenerator = $extractGenerator;
        $this->articleCalculator = $articleCalculator;
    }


    /**
     * @Route("/article/{id}/extract", name="show_article_extract")
     */
    public function showExtractArticle($id, ArticleRepository $articleRepository, EntityManagerInterface $entityManager)
    {
        $article = $articleRepository->find($id);
        $extract = $this->extractGenerator->generateExtract($article);

        $price = 0;

        if ($article->getIsPaid()) {
            $price = $this->articleCalculator->calculatePrice($article);
        }

        return $this->render('article.html.twig', [
            'article' => $article,
            'extract' => $extract,
            'price' => $price
        ]);
    }


}
