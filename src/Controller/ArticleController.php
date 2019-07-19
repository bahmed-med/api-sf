<?php

namespace App\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;


/**
 * Class ArticleController
 * @package App\Controller
 * @Rest\RouteResource("Articles", pluralize=false)
 */
class ArticleController extends FOSRestController implements ClassResourceInterface
{
    /**
     *
     */
    public function getAction()
    {
        return new JsonResponse('test');
    }
}
