<?php
/**
 * Adesh_Banner
 *
 * PHP version 7.x
 *
 * @category  PHP
 * @package   Adesh/Banner
 * @copyright 2020 Copyright (c)
 * @link
 **/
declare(strict_types=1);

namespace Adesh\Banner\Model\Attribute\Source;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class AgeGroupArray extends AbstractSource
{

    /**
     * @return array
     */
    public function getAllOptions(): array
    {
        $optionsArray = [
            ['label' => 'Bellow 18', 'value' => '0'],
            ['label' => '18 to 25', 'value' => '1'],
            ['label' => 'Above 25', 'value' => '2']
        ];

        return $optionsArray;
    }
}
