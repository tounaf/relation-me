<?php
/**
 * Created by PhpStorm.
 * User: nambinina2
 * Date: 20/12/2019
 * Time: 15:02
 */

namespace App\Service;


interface TransformerInterface
{
    public function transform($value);
}