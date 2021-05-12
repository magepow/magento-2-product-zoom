<?php

/**
 * @Author: nguyen
 * @Date:   2020-07-09 20:12:00
 * @Last Modified by:   nguyen
 * @Last Modified time: 2021-05-12 11:53:20
 */

namespace Magepow\Zoom\Model\Config\Source;

class Truefalse implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [['value' => 'true', 'label' => __('True')], ['value' => 'false', 'label' => __('False')]];
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return ['false' => __('No'), 'true' => __('Yes')];
    }
}
