<?php
/**
 * Created by PhpStorm.
 * User: nambinina2
 * Date: 15/01/2020
 * Time: 17:32
 */

namespace App\Event;


use App\Entity\Product;
use Symfony\Contracts\EventDispatcher\Event;

class NotifyEvent extends Event
{
    public const NAME = 'notify.user';

    private $name;

    public function __construct(Product $product)
    {
        $this->name = $product->getName();
    }

    public function getName()
    {
        return $this->name;
    }

}