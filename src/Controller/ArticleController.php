<?php
/**
 * Created by PhpStorm.
 * User: Vangjush
 * Date: 10/30/2018
 * Time: 2:37 PM
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
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
        return new Response(sprintf('Article page: %s', $url));
    }

}