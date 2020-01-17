<?php
/**
 * Created by PhpStorm.
 * User: nambinina2
 * Date: 20/12/2019
 * Time: 17:37
 */

namespace App\Subscribers;


use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ControllerArgumentsEvent;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class ArgumentSubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents()
    {
        return array(
            KernelEvents::CONTROLLER_ARGUMENTS => ['getController',3],
            KernelEvents::CONTROLLER =>['getParam',2]
        );
    }

    public function getController(ControllerArgumentsEvent $event)
    {
//        dump($event->getController()[0]);
    }

    public function getParam(ControllerEvent $event)
    {
        $event->getRequest()->request->set('tounaf-young','me');
//        dump($event->getRequest()->query->count());
    }
}