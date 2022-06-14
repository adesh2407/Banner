<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Adesh\Banner\Model;

use Adesh\Banner\Api\Data\BannerInterface;
use Magento\Framework\Model\AbstractModel;

class Banner extends AbstractModel implements BannerInterface
{

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(\Adesh\Banner\Model\ResourceModel\Banner::class);
    }

    /**
     * @inheritDoc
     */
    public function getBannerId()
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * @inheritDoc
     */
    public function setBannerId($bannerId)
    {
        return $this->setData(self::ENTITY_ID, $bannerId);
    }

    /**
     * @inheritDoc
     */
    public function getBannerName()
    {
        return $this->getData(self::BANNER_NAME);
    }

    /**
     * @inheritDoc
     */
    public function setBannerName($bannerName)
    {
        return $this->setData(self::BANNER_NAME, $bannerName);
    }

    /**
     * @inheritDoc
     */
    public function getAgeGroup()
    {
        return $this->getData(self::AGE_GROUP);
    }

    /**
     * @inheritDoc
     */
    public function setAgeGroup($ageGroup)
    {
        return $this->setData(self::AGE_GROUP, $ageGroup);
    }

    /**
     * @inheritDoc
     */
    public function getImage()
    {
        return $this->getData(self::IMAGE);
    }

    /**
     * @inheritDoc
     */
    public function setImage($image)
    {
        return $this->setData(self::IMAGE, $image);
    }
}

