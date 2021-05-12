<?php

/**
 * @Author: nguyen
 * @Date:   2020-06-09 20:10:33
 * @Last Modified by:   nguyen
 * @Last Modified time: 2021-05-12 11:53:19
 */

namespace Magepow\Zoom\Model\Config\Source;

class Type implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            'grab' 		=> 'grab',
            'click' 	=> 'click',
            'toggle' 	=> 'toggle',
            'mouseover' => 'mouseover'
        ];
    }
}
