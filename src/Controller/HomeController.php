<?php
/**
 * Created by PhpStorm.
 * User: nambinina2
 * Date: 20/12/2019
 * Time: 15:10
 */

namespace App\Controller;


use App\Service\TransformerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/index/{nom}", name="index")
     * @param TransformerInterface $upperTransofrmer
     * @param $nom
     * @return Response
     */
    public function index(TransformerInterface $upperTransofrmer, $nom)
    {
        return $this->render('home/index.html.twig', array(
            'nom' => $upperTransofrmer->transform($nom)
        ));
    }

    /**
     * @Route("/show", methods={"GET"})
     * @return JsonResponse
     */
    public function show()
    {
        return new JsonResponse(array('status'=>Response::HTTP_OK,"message"=>'succes'));
    }

}