<?php
/**
 * Created by PhpStorm.
 * User: Vangjush
 * Date: 10/30/2018
 * Time: 2:37 PM
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Hello World!!');
    }

    /**
     * @Route("/news/{url}")
     */
    public function show($url)
    {
        $comments =['Further development under the auspices of the IETF was stalled by competing interests. Since 1996',
            'Further development under the auspices of the IETF was stalled by competing interests. Since 1996',
            'Further development under the auspices of the IETF was stalled by competing interests. Since 1996',
            ];

        return $this->render('article/show.html.twig', [
            'title' =>ucwords(str_replace('-', '', $url)),
            'comments' => $comments,

        ]);
    }

}