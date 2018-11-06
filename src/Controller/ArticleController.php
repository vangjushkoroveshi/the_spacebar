<?php
/**
 * Created by PhpStorm.
 * User: Vangjush
 * Date: 10/30/2018
 * Time: 2:37 PM
 */

namespace App\Controller;


use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('article/homepage.html.twig');
    }

    /**
     * @Route("/news/{url}", name="article_show")
     */
    public function show($url)
    {
        $comments =['Further development under the auspices of the IETF was stalled by competing interests. Since 1996',
            'Further development under the auspices of the IETF was stalled by competing interests. Since 1996',
            'Further development under the auspices of the IETF was stalled by competing interests. Since 1996',
        ];

        return $this->render('article/show.html.twig', [
            'title' =>ucwords(str_replace('-', ' ', $url)),
            'url' => $url,
            'comments' => $comments,

        ]);
    }

    /**
     * @Route("/news/{url}/heart", name="article_toggle_heart", methods={"POST"})
     */

    public function toggleArticleHeart($url, LoggerInterface $logger)
    {
        // TODO - actually heart/unheart the article!

        $logger->info('Article is being hearted');

        return new JsonResponse(['hearts' => rand(5,100)]);

    }

}