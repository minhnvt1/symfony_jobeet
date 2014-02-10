<?php
/**
 * Created by PhpStorm.
 * User: minhnvt1
 * Date: 2/10/14
 * Time: 12:14 PM
 */

namespace Ens\JobeetBundle\Utils;


class Jobeet
{
    static public function slugify($text)
    {
        //replace all non letters or digits by -
        $text = preg_replace('/\W+/', '-', $text);

        //trim and lowercase
        $text = trim(strtolower($text));

        return $text;
    }
} 