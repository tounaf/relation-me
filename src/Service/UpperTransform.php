<?php
/**
 * Created by PhpStorm.
 * User: nambinina2
 * Date: 20/12/2019
 * Time: 15:03
 */

namespace App\Service;


class UpperTransform implements TransformerInterface
{
    public function transform($value)
    {
        return strtoupper($value);
    }
}