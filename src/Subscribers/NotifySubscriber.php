<?php
/**
 * Created by PhpStorm.
 * User: nambinina2
 * Date: 15/01/2020
 * Time: 17:42
 */

namespace App\Subscribers;

use App\Event\NotifyEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
class NotifySubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents()
    {
        return array(
            NotifyEvent::NAME => 'onCreate'
        );
    }

    public function onCreate(NotifyEvent $notifyEvent)
    {
        dump($notifyEvent);die();
    }
}