<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Customize\Twig;

use Eccube\Twig\Extension\EccubeExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class CustomizeJsonExtension extends EccubeExtension
{

    
    /**
     * Returns a list of functions to add to the existing list.
     *
     * @return TwigFunction[] An array of functions
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('anything_as_json', [$this, 'getAnythingAsJson']),
        ];
    }

    
    // /**
    //  * Name of this extension
    //  *
    //  * @return string
    //  */
    // public function getName()
    // {
    //     return 'customizeJson';
    // }

        /**
     * Get the ClassCategories as JSON.
     *
     * @param Product $Product
     *
     * @return string
     */
    public function getAnythingAsJson()
    {
        
        $anythingJson = [
            '__unselected' => [
                '__unselected' => [
                    'name' => trans('common.select'),
                    'anything_id' => '',
                ],
            ],
        ];

        return json_encode($anythingJson);
    }

}