<?php

namespace App\Controller;

use App\Entity\Product;
use App\Event\NotifyEvent;
use App\Subscribers\NotifySubscriber;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/vue", name="product")
     */
    public function vueShow()
    {
        $product = $this->getDoctrine()->getRepository(Product::class)->find(1);
        $dispatcher = new EventDispatcher();
        $notifyEvent = new NotifyEvent($product);
//        $dispatcher->addListener(NotifyEvent::NAME,[new NotifySubscriber(), 'onCreate']);
        $dispatcher->dispatch($notifyEvent, NotifyEvent::NAME);
        return $this->render('product/index.html.twig');
    }

    /**
     * @Route("/react", name="react_show")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function reactShow()
    {
        return $this->render('product/index_react.html.twig');
    }
}
