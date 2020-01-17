<?php
/**
 * Created by PhpStorm.
 * User: nambinina2
 * Date: 20/12/2019
 * Time: 15:04
 */

namespace App\Service;


class TextTransform implements TransformerInterface
{

    public function transform($value)
    {
        return str_rot13($value);
    }
}